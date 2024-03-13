<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Models\Expert;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
       $articles = Article::where('is_draft', 0)->get();
        //  $articles = Article::all();
        return view('admin.articles.index',compact('articles'));
    }

    public function draftedIndex()
    {
        $articles = Article::where('is_draft', 1)->get();

        return view('admin.articles.draftArticle', ['articles' => $articles]);
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
            'article_body' => 'nullable|string',
        ]);
    
        // Handle the file upload
        $bannerImage = $request->file('banner_image');
        $bannerImageName = time() . '_' . $bannerImage->getClientOriginalName();
        $bannerImage->move(public_path('uploads'), $bannerImageName);

        $isDraft = $request->has('save_as_draft') ? 1 : 0;
    
        $article = new Article;
        $article->article_title = $request->input('article_title');
        $article->category_id = $request->input('category_id');
        $article->expert_id = $request->input('expert_id');
        $article->article_slug = $request->input('article_slug');
        $article->meta_tag = $request->input('meta_tag');
        $article->meta_description = $request->input('meta_description');
        $article->banner_image = $bannerImageName; // Save the file name in the database
        $article->summary = $request->input('summary');
        $article->article_body = $request->input('article_body');
        $article->is_draft = $isDraft; 
    
        $article->save();
        return redirect()->route('article.index')->with('success', 'Article created successfully');
    }
    

    // public function update(Request $request, $id)
    // {
   
    //     $validatedData = $request->validate([
    //         'article_title' => 'required|max:255',
    //         'category_id' => 'required',
    //         'expert_id' => 'required',
    //         'article_slug' => 'required',
    //         'meta_tag' => 'required',
    //         'meta_description' => 'required',
    //         'banner_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    //         'summary' => 'required',
    //         'article_body' => 'required',
    //     ]);
    
    //     $article = Article::findOrFail($id);
    
    //     $article->update($validatedData);
    
    //     if ($request->hasFile('banner_image')) {
    //         if ($article->banner_image) {
             
    //             Storage::delete('public/uploads/' . $article->banner_image);
    //         }
       
    //         $bannerImage = $request->file('banner_image')->store('public/uploads');
    //         $article->banner_image = basename($bannerImage);
    //         $article->save();
    //     }
        
    //     return redirect()->route('article.index')->with('success', 'Article updated successfully');
    // }
    
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'article_title' => 'required|max:255',
            'category_id' => 'required',
            'expert_id' => 'required',
            'article_slug' => 'required',
            'meta_tag' => 'required',
            'meta_description' => 'required',
            'banner_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'summary' => 'required',
            'article_body' => 'required',
        ]);
    
        $article = Article::findOrFail($id);
    
        // Update fields other than banner_image
        $article->update($validatedData);
    
        // Update the banner image
        if ($request->hasFile('banner_image')) {
            // Delete the old image file
            if ($article->banner_image) {
                $oldImagePath = public_path('uploads/' . $article->banner_image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
    
            // Store and save the new banner image
            $bannerImage = $request->file('banner_image')->store('public/uploads');
            $article->banner_image = basename($bannerImage);
            $article->save();
        }
    
        return redirect()->route('article.index')->with('success', 'Article updated successfully');
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
    // public function draftedArticle(Request $request)
    // {   
    //     // Route::get('article/draft', 'ArticleController@draft')->name('article.draft');

    //     return "hello";
    //     // $draftedArticles = Article::where('status', 'draft')->get();
    //     // return view('admin.articles.draftArticle', compact('draftedArticles'));
    // }
    // Article.php (model)

    public function scopeDrafted($query)
    {
        return $query->where('is_draft', 1);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
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