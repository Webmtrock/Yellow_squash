@extends('layouts.app')
@section('content')
<div style="text-align: center;">
    <h1>Add New Program</h1>
    <a href="{{ route('programs.index') }}" class="btn btn-danger btn-lg float-right">Back</a>
</div>
<div class="content-wrapper">
    <body>
        <div class="container mt-3 mb-3">
            <form action="{{ route('programs.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group mb-2">
                    <label>Program Title <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror"  name="title" id="title" placeholder="Enter the Title">
                    @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <label>Program Rating <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('rating') is-invalid @enderror"  name="rating" id="rating" placeholder="Enter the Rating">
                    @error('rating')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                
                <div class="form-group mb-2">
                    <label>Select Program Expert <span class="text-danger">*</span></label>
                    <select class="form-control @error('expert') is-invalid @enderror" name="expert_id">
                        <option value="">Select Program Expert</option>
                        @foreach($experts as $expert)
                        <option value="{{ $expert->id }}">{{ $expert->name }}</option>
                        @endforeach
                    </select>
                    @error('expert')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- <div class="form-group mb-2">
                    <label>Program Video <span class="text-danger">*</span></label>
                    <input type="file" class="form-control-file @error('video') is-invalid @enderror" name="video">
                    @error('video')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div> -->

               <!--  <div class="form-group mb-2">
                    <label>Program Image <span class="text-danger">*</span></label>
                    <input type="file" class="form-control-file @error('image_url') is-invalid @enderror" name="image_url">
                    @error('image_url')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div> -->

                <div class="form-group mb-2">
                    <label>Program For <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('program_for') is-invalid @enderror" name="program_for">
                    @error('program_for')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <label>Whatsapp Group Url <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('whatsapp_group_url') is-invalid @enderror" name="whatsapp_group_url">
                    @error('whatsapp_group_url')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group mb-2">
                    <label>Intake Form Link <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('intake_from_link') is-invalid @enderror" name="intake_from_link">
                    @error('intake_from_link')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <!-- <div class="form-group mb-2">
                    <label>Enrolled User's <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('enrolled_user_input') is-invalid @enderror" name="enrolled_user_input">
                    @error('enrolled_user_input')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div> -->
                <div class="form-group mb-2">
                    <label>Select Category <span class="text-danger">*</span></label>
                    <select class="form-control @error('category') is-invalid @enderror" name="category_id">
                        <option value="">Select Category</option>
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>
                    @error('category')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>





                    <!-- Add other fields like Whatsapp Group Url, Intake Form Link, Select Category, Enrolled Users -->

                    <input type="submit" value="Submit" class="btn btn-success">
                </form>
            </div>
        </body>
    </div>
    @endsection
