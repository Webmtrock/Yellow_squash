<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Session;


class CategoriesController extends Controller
{
    
  public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function saveCategory(Request $request, $id = null)
    {
        $rules = [
            'title' => 'required|string|max:255',
        ];

        if ($id !== null) {
            $rules['title'] .= ',' . $id;
        }

        $request->validate($rules);

        $category = $id ? Category::findOrFail($id) : new Category;
        $category->title = $request->title;

        if ($request->has('status')) {
            $category->status = $request->status;
        }

        $category->save();

        $message = $id ? 'Category Updated successfully' : 'Category Added successfully';

        return redirect()->route('categories.index')->with('success', $message);
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.update', compact('category'));
    }

    public function store(Request $request)
    {
        return $this->saveCategory($request);
    }

    public function update(Request $request, $id)
    {
        return $this->saveCategory($request, $id);
    }

    public function delete($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Category Deleted successfully');
    } 

}
