<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Expert;
use App\Models\Category;

class ExpertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expert = Expert::all();
        return view('admin.expert.index', compact('expert'));
    //    return view('expert.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     return view('admin.expert.create');
    // }
    public function create()
    {
         $categories = Category::all();
        return view('admin.expert.create',compact('categories'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
     public function store(Request $request)
     {
            $validatedData = $request->validate([
                'expert_category_id' => 'required',
                'name' => 'required|string|max:255',
                'expert_designation' => 'required',
                'expert_experience' => 'required',
                'expert_qualification' => 'required',
                'expert_language' => 'required',
                'expert_description' => 'required',
            ]);
        
            $expert = Expert::create([
                'expert_category_id' => $validatedData['expert_category_id'],
                'name' => $validatedData['name'],
                'expert_designation' => $validatedData['expert_designation'],
                'expert_experience' => $validatedData['expert_experience'],
                'expert_qualification' => $validatedData['expert_qualification'],
                'expert_language' => $validatedData['expert_language'],
                'expert_description' => $validatedData['expert_description'],
            ]);
            return redirect()->route('expert.index')->with('success', 'Expert created successfully');
     }
     


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     $expert = Expert::all();
    //     return view('', compact('user'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {    
        $expert = Expert::where('id',$id)->first();
        $categories = Category::all();
        return view('admin.expert.edit', compact('expert', 'categories'));
        // return view('admin.expert.edit',['expert' =>$expert]);
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        // Validate the form
        $validatedData = $request->validate([
            'expert_category_id' => 'required',
            'name' => 'required|string|max:255',
            'expert_designation' => 'required',
            'expert_experience' => 'required',
            'expert_qualification' => 'required',
            'expert_language' => 'required',
            'expert_description' => 'required',
        ]);
    
        // Find the Expert by ID
        $expert = Expert::find($id);
    
        // Check if the Expert exists
        if (!$expert) {
            return redirect()->route('expert.index')->with('error', 'Expert not found');
        }
    
        // Update the Expert with the validated data
        $expert->update([
            'expert_category_id' => validatedData['expert_category_id'],
            'name' => $validatedData['name'],
            'expert_designation' => $validatedData['expert_designation'],
            'expert_experience' => $validatedData['expert_experience'],
            'expert_qualification' => $validatedData['expert_qualification'],
            'expert_language' => $validatedData['expert_language'],
            'expert_description' => $validatedData['expert_description'],
        ]);
    
        // Redirect to the index page with a success message
        return redirect()->route('expert.index')->with('success', 'Expert updated successfully');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//     public function delete($id)
//     {
//         $expert = Expert::findOrFail($id);
//         $expert->delete();
//         return redirect()->route('expert.index')->with('success', 'User Deleted successfully');
// }
public function destroy($id)
{
    // Find the Expert by ID
    $expert = Expert::find($id);

    // Check if the Expert exists
    if (!$expert) {
        return redirect()->route('expert.index')->with('error', 'Expert not found');
    }

    // Delete the Expert
    $expert->delete();

    // Redirect to the index page with a success message
    return redirect()->route('expert.index')->with('success', 'Expert deleted successfully');
}

}