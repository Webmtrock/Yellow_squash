<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
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
        $categories = Category::all();
        return view('admin.articles.create' ,  compact('categories'));
        // return view('admin.articles.create', compact('id'));
    }

    

        public function store(Request $request)
        {
            // Validate the form data
            // dd($request->all());
            $request->validate([
                'article_title' => 'required|string|max:255',
                'category_id' => 'required|exists:categories,id',
                'article_author' => 'required|string|max:255',
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
            $article->article_author = $request->input('article_author');
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
        //
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
    public function destroy($id)
    {
        //
    }
}