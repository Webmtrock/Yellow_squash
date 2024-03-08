<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Models\Expert;
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
         $articles = Article::all();
        return view('admin.articles.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $experts = Expert::all();
        $categories = Category::all();
        return view('admin.articles.create' ,  compact('categories' ,'experts'));
        
    }


    public function store(Request $request)
    {
        $request->validate([
            'article_title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'expert_id' => 'required|string|max:255',
            'article_slug' => 'required|string|max:255|unique:articles,article_slug',
            'meta_tag' => 'required|string|max:255',
            'meta_description' => 'required|string|max:255',
            'banner_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'summary' => 'required|string',
            // Add more validation rules as needed
        ]);

        // Handle the file upload
        $bannerImage = $request->file('banner_image');
        $bannerImageName = time() . '_' . $bannerImage->getClientOriginalName();
        $bannerImage->move(public_path('uploads'), $bannerImageName);

        // Create a new article instance
        $article = new Article;
        $article->article_title = $request->input('article_title');
        $article->category_id = $request->input('category_id');
        $article->expert_id = $request->input('expert_id');
        $article->article_slug = $request->input('article_slug');
        $article->meta_tag = $request->input('meta_tag');
        $article->meta_description = $request->input('meta_description');
        $article->banner_image = $bannerImageName; // Save the file name in the database
        $article->summary = $request->input('summary');
        // Add more fields as needed

        // Save the article
        $article->save();

        // Redirect or do any additional logic as needed
        return redirect()->route('article.index')->with('success', 'Article created successfully');
    }
   
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
    public function edit($id)
    {
         $article = Article::findOrFail($id);
        $categories = Category::all();
        $experts = Expert::all();

        return view('admin.articles.create', compact('article', 'categories', 'experts'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function delete($id)
    // {
    //     dd($id);
    //     $article = Article::find($id);
    //     if (!$article) {
    //         return redirect()->route('article.index')->with('error', 'Article not found');
    //     }
    //     $article->delete();
    
    //     // Redirect to the index page with a success message
    //     return redirect()->route('article.index')->with('success', 'Article deleted successfully');
    // }
    public function destroy($id)
{


     $article = Article::find($id);
    if (!$article) {
        return redirect()->route('article.index')->with('error', 'Article not found');
    }
    $article->delete();

    // Redirect to the index page with a success message
    return redirect()->route('article.index')->with('success', 'Article deleted successfully');
}

    
}