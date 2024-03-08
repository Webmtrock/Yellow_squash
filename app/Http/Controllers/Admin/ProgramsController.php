<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Programins;
use App\Models\Expert;
use App\Models\Category;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;


class ProgramsController extends Controller
{
 
    public function index()
    {
        $programs = Programins::all();
        return view('admin.programs.index', compact('programs'));
    }

    public function create()
    {
        $categories = Category::all();
        $experts = Expert::all();
        return view('admin.programs.create', compact('categories', 'experts'));
    }   


    public function saveProgram(Request $request, $id = null)
{
    $rules = [
        'title' => 'required|string|max:255',
        'rating' => 'required|integer|min:1|max:10',
        'expert_id' => 'required|exists:experts,id',
        'program_for' => 'required|string|max:255',
        'whatsapp_group_url' => 'required|string|max:255',
        'intake_from_link' => 'required|string|max:255',
        'category_id' => 'required|string|max:255',
        'image_url' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate the image upload
    ];

    $request->validate($rules);

    $program = $id ? Programins::findOrFail($id) : new Programins;

    $program->title = $request->title;
    $program->rating = $request->rating;
    $program->expert_id = $request->expert_id; 
    $program->program_for = $request->program_for;
    $program->whatsapp_group_url = $request->whatsapp_group_url;
    $program->intake_from_link = $request->intake_from_link;
    $program->category_id = $request->category_id;

    
    if ($request->hasFile('image_url')) {
        $image = $request->file('image_url');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move('uploads', $imageName); 
        $program->image_url = $imageName; 
    }

    $program->save();

    $message = $id ? 'Program Updated successfully' : 'Program Added successfully';

    return redirect()->route('programs.index')->with('success', $message);
} 

    public function edit($id)
    {
        $program = Programins::findOrFail($id);
        $categories = Category::all();
        $experts = Expert::all(); 
        return view('admin.programs.update', compact('program', 'experts', 'categories'));
    }


    public function store(Request $request)
    {
        return $this->saveProgram($request);
    }

    public function update(Request $request, $id)
    {
        return $this->saveProgram($request, $id);
    }
    public function delete($id)
    {
        $program = Programins::findOrFail($id);
        $program->delete();
        return redirect()->route('programs.index')->with('success', 'Program Deleted successfully');
    }

}
