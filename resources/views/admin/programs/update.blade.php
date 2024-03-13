@extends('layouts.app')

@section('content')
    <div style="text-align: center;">
        <h1>Edit Program</h1>
        <a href="{{ route('programs.index') }}" class="btn btn-danger btn-lg float-right">Back</a>
    </div>
    <div class="content-wrapper">
        <div class="container mt-3 mb-3">
            <form action="{{ route('programs.update', $program->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group mb-2">
                    <label>Program Title <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                        id="title" placeholder="Enter the Title" value="{{ $program->title }}">
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group mb-2">
                    <label>Program Rating <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('rating') is-invalid @enderror" name="rating"
                        id="rating" placeholder="Enter the Rating" value="{{ $program->rating }}">
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
                        @foreach ($experts as $expert)
                            <option value="{{ $expert->id }}" {{ $program->expert_id == $expert->id ? 'selected' : '' }}>
                                {{ $expert->name }}</option>
                        @endforeach
                    </select>
                    @error('expert')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group mb-2">
                    <label>Program Image <span class="text-danger">*</span></label>
                    <input type="file" class="form-control-file @error('image_url') is-invalid @enderror"
                        name="image_url">
                    @error('image_url')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!-- Display current image if available -->
                    @if ($program->image_url)
                        <div class="mt-2">
                            <p>Program Image:</p>
                            <img src="{{ asset('uploads/' . $program->image_url) }}" alt="Current Image"
                                style="max-width: 200px;">
                        </div>
                    @endif
                </div>

                <div class="form-group mb-2">
                    <label>Program Video <span class="text-danger">*</span></label>
                    <input type="file" class="form-control-file @error('programming_tovideo_url') is-invalid @enderror"
                        name="programming_tovideo_url">
                    @error('programming_tovideo_url')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!-- Display current video if available -->
                    @if ($program->programming_tovideo_url)
                        <div class="mt-2">
                            <p>Program Video:</p>
                            <video width="200" height="200" controls>
                                <source src="{{ asset('uploads/videos/' . $program->programming_tovideo_url) }}"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    @endif
                </div>



                <div class="form-group mb-2">
                    <label>Program For <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('program_for') is-invalid @enderror" name="program_for"
                        value="{{ $program->program_for }}">
                    @error('program_for')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group mb-2">
                    <label>Whatsapp Group Url <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('whatsapp_group_url') is-invalid @enderror"
                        name="whatsapp_group_url" value="{{ $program->whatsapp_group_url }}">
                    @error('whatsapp_group_url')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group mb-2">
                    <label>Intake Form Link <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('intake_from_link') is-invalid @enderror"
                        name="intake_from_link" value="{{ $program->intake_from_link }}">
                    @error('intake_from_link')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <label>Enrolled User's <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('enroll_user') is-invalid @enderror" name="enroll_user"
                        value="{{ $program->enroll_user }}">
                    @error('enroll_user')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <label>Select Category <span class="text-danger">*</span></label>
                    <select class="form-control @error('category') is-invalid @enderror" name="category_id">
                        <option value="">Select Category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ $program->category_id == $category->id ? 'selected' : '' }}>{{ $category->title }}
                            </option>
                        @endforeach
                    </select>
                    @error('category')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div>
                    <label>Add Plans</label>
                </div>
                <button type="button" id="addPlan" class="btn btn-warning text-black">Add+</button>
                <div id="planFields">
                    <div class="form-group mb-2 plan-group">
                        <div>
                            <label>Plan 1</label>
                        </div>
                        <label>Enter Plan</label>
                        <input type="text" class="form-control" name="add_plans" value="{{ $program->add_plans }}">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label for="name" class="mt-2">Program Description <span class="text-danger">*</span></label>
                        <textarea name="program_description" class="ckeditor @error('program_description') is-invalid @enderror" id="ckeditor">{{ $program->program_description }}</textarea>
                        @error('program_description')
                            <span class="invalid-feedback form-invalid fw-bold" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                </div>                

                <input type="submit" value="Update" class="btn btn-success">
            </form>
        </div>
    </div>
@endsection
