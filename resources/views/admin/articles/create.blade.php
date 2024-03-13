@extends('layouts.app')
@section('content')

<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        @if(Session::has('success'))
        @section('scripts')
        <script>
        swal("Good job!", "{{ Session::get('success') }}", "success");
        </script>
        @endsection
        @endif

        @if(Session::has('error'))
        @section('scripts')
        <script>
        swal("Oops...", "{{ Session::get('error') }}", "error");
        </script>
        @endsection
        @endif

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header border-bottom h3">
                        {{ isset($article) ? 'Edit Blog' : 'New Blog' }}
                    </div>
                    <div class="card-body">
                        <!-- <form
                            action="{{ isset($data) ? route('article.update', $article->id) : route('article.store') }}"
                            method="POST" enctype="multipart/form-data" id="basic-form"> -->
                        <form
                            action="{{ isset($article) ? route('article.update', $article->id) : route('article.store') }}"
                            method="POST" enctype="multipart/form-data" id="basic-form">



                            @csrf
                            @if(isset($article))
                            @method('PUT')
                            @endif

                            <!-- 
                            <input type="hidden" name="expert_category_id" id="id"
                                value="{{ isset($data) ? $data->id : '' }}"> -->

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="article_title" class="mt-2">Article Title <span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="article_title"
                                            class="form-control @error('article_title') is-invalid @enderror"
                                            value="{{ old('article_title', isset($article) ? $article->article_title : '') }}">

                                        @error('article_title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="mt-2">Select Category <span
                                                class="text-danger">*</span></label>
                                        <select class="form-control" id="category_id" name="category_id">
                                            <option value="">Select Category</option>
                                            @foreach($categories as $categorie)
                                            <option value="{{ $categorie->id }}"
                                                {{ old('category_id', isset($article) && $article->category_id == $categorie->id ? 'selected' : '') }}>
                                                {{ $categorie->title }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="mt-2"> Select Article Author <span
                                                class="text-danger">*</span></label>
                                        <select class="form-control" name="expert_id">
                                            <option value="">Select Author</option>
                                            @foreach($experts as $expert)
                                            <option value="{{ $expert->id }}"
                                                {{ old('expert_id', isset($article) && $article->expert_id == $expert->id ? 'selected' : '') }}>
                                                {{ $expert->name }}</option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('expert_id'))
                                        <span class="text-danger">{{ $errors->first('expert_id') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="mt-2"> Article Slug <span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="article_slug" placeholder="Add Slug"
                                            class="form-control @error('article_slug') is-invalid @enderror"
                                            value="{{ old('article_slug', isset($article) ? $article->article_slug : '') }}"
                                            required>
                                        @error('article_slug')
                                        <span class="invalid-feedback form-invalid fw-bold" role="alert">
                                            {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="form-group">
                                <label for="name" class="mt-2"> Expert Name <span class="text-danger">*</span></label>
                                <input type="text" name="name"
                                    class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" value=""
                                    required>
                                @if($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div> -->


                            <div class="row">
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label for="name" class="mt-2"> Meta Tag <span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="meta_tag"
                                            class="form-control @error('meta_tag') is-invalid @enderror"
                                            value="{{ old('meta_tag', isset($article) ? $article->meta_tag : '') }}">

                                        @error('meta_tag')
                                        <span class="invalid-feedback form-invalid fw-bold" role="alert">
                                            {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="mt-2"> Meta Description <span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="meta_description"
                                            class="form-control @error('meta_description') is-invalid @enderror"
                                            value="{{ old('meta_description', isset($article) ? $article->meta_description : '') }}">
                                        @error('meta_description')
                                        <span class="invalid-feedback form-invalid fw-bold" role="alert">
                                            {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="mt-2"> Banner Image<span
                                                class="text-danger">*</span></label>
                                        <input type="file" name="banner_image"
                                            class="form-control @error('banner_image') is-invalid @enderror">
                                        @error('banner_image')
                                        <span class="invalid-feedback form-invalid fw-bold" role="alert">
                                            {{ $message }}
                                        </span>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        @if (isset($article->banner_image))
                                        <div class="mt-2">
                                            <p>Program Image:</p>
                                            <!-- <img src="{{ asset($article->banner_image) }}" alt="Banner Image"
                                                style="max-width: 200px;"> -->

                                            <img src="{{ asset('uploads/'.$article->banner_image) }}"
                                                alt="Current Image" style="max-width: 200px;">
                                        </div>
                                        @endif

                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="name" class="mt-2"> Summary <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="summary" rows="3"
                                    name="summary">{{ old('summary', isset($article) ? $article->summary : '') }}</textarea>
                                @error('summary')
                                <span class="invalid-feedback form-invalid fw-bold" role="alert">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>


                            <div class="row">
                                <div class="form-group">
                                    <label for="name" class="mt-2"> Artical body <span
                                            class="text-danger">*</span></label>
                                    <textarea name="article_body"
                                        class="ckeditor @error('article_body') is-invalid @enderror"
                                        id="ckeditor">{{ old('article_body', isset($article) ? $article->article_body : '') }}</textarea>
                                    @error('article_body')
                                    <span class="invalid-feedback form-invalid fw-bold" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="flex items-center justify-between ">
                                <button class="btn bg-warning " type="submit">Send For Approval</button>
                                @if(!isset($article))
                                <!-- <button class="btn bg-secondary text-white ml-3">Save as Draft</button> -->
                                <button type="submit" name="save_as_draft" class="btn bg-secondary text-white ml-3"
                                    value="1">Save as Draft</button>

                                @endif
                                <button class="btn bg-danger text-white ml-auto">Cancel</button>

                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
<script src="//cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<script>
ClassicEditor
    .create(document.querySelector('#ckeditor'))
    .catch(error => {
        console.error(error);
    });
</script>