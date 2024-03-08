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
                        <form action="{{ isset($data) ? route('article.update', $data->id) : route('article.store') }}"
                            method="POST" enctype="multipart/form-data" id="basic-form">

                            @csrf
                            @if(isset($data))
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
                                            value="{{ old('article_title') }}">
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
                                            <option value="{{ $categorie->id }}">{{ $categorie->title }}</option>
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
                                        <select class="form-control" name="article_author">
                                            <option value="">Select Author</option>
                                            @foreach($experts as $expert)
                                            <option value="{{ $expert->id }}">{{ $expert->name }}</option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('article_author'))
                                        <span class="text-danger">{{ $errors->first('article_author') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="mt-2"> Article Slug <span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="article_slug" placeholder="Add Slug"
                                            class="form-control @error('article_slug') is-invalid @enderror"
                                            value="{{ old('article_slug', isset($data) ? $data->article_slug : '') }}"
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
                                            value="{{ old('meta_tag', isset($data) ? $data->meta_tag : '') }}" required>
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
                                            value="{{ old('meta_description', isset($data) ? $data->meta_description : '') }}"
                                            required>
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
                                            class="form-control @error('banner_image') is-invalid @enderror"
                                            value="{{ old('banner_image', isset($data) ? $data->banner_image : '') }}"
                                            required>
                                        @error('banner_image')
                                        <span class="invalid-feedback form-invalid fw-bold" role="alert">
                                            {{ $message }}
                                        </span>
                                        @enderror
                                    </div>

                                </div>


                                <div class="form-group">
                                    <label for="name" class="mt-2"> Summary <span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="summary" rows="3" name="summary"></textarea>

                                    @error('summary')
                                    <span class="invalid-feedback form-invalid fw-bold" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>

                                <!-- <div class="form-group">
                                    <label for="name" class="mt-2">Article Body<span
                                            class="text-danger">*</span></label>
                                    <input type="file" name="article_body"
                                        class="form-control @error('article_body') is-invalid @enderror"
                                        value="{{ old('article_body', isset($data) ? $data->article_body : '') }}"
                                        required>
                                    @error('article_body')
                                    <span class="invalid-feedback form-invalid fw-bold" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div> -->
                                <!-- <div class="border-[1.5px]  border-opacity-50 border-black flex items-end rounded-sm">
                                <textarea maxlength="200" name="summury"
                                    class="outline-none resize-none w-full text-sm rounded-md px-3 py-[4px]"
                                    rows="3"></textarea><span class="pr-2">200</span>
                            </div> -->
                                <!-- <div class="mt-3">
                                <input class="btn btn-primary" type="submit"
                                    value="{{ isset($data) ? 'Update' : 'Save' }}">
                            </div> -->
                                <div class="flex items-center justify-between ">
                                    <button class="btn bg-warning " type="submit">Send For Approval</button>
                                    <button class="btn bg-secondary text-white ml-3">Save as
                                        Draft</button>
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