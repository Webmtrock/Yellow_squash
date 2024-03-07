<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Expert;

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
         // Validate the form
         $validatedData = $request->validate([
            //  'select_expert_category' => 'required|string|max:255',
             'name' => 'required|string|max:255',
             'expert_designation' => 'required',
             'expert_experience' => 'required',
             'expert_qualification' => 'required',
             'expert_language' => 'required',
             'expert_description' => 'required',
         ]);
     
         // Create a new Expert instance and save it to the database
         $expert = Expert::create([
            //  'select_expert_category' => $validatedData['select_expert_category'],
             'name' => $validatedData['name'],
             'expert_designation' => $validatedData['expert_designation'],
             'expert_experience' => $validatedData['expert_experience'],
             'expert_qualification' => $validatedData['expert_qualification'],
             'expert_language' => $validatedData['expert_language'],
             'expert_description' => $validatedData['expert_description'],
         ]);
     
         // Redirect to the index page with a success message
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
        return view('admin.expert.edit',['expert' =>$expert]);
    
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
    $expert = Expert::find($id);
    if (!$expert) {
        return redirect()->route('expert.index')->with('error', 'Expert not found');
    }
    $expert->delete();

    // Redirect to the index page with a success message
    return redirect()->route('expert.index')->with('success', 'Expert deleted successfully');
}

}