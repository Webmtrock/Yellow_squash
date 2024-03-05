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
                        {{ isset($data) && isset($data->id) ? 'Edit Expert' : 'Create Expert' }}
                    </div>
                    <div class="card-body">

                        <form action="" method="POST" enctype="multipart/form-data"
                        id="basic-form">
                        @csrf
                        <input type="hidden" name="select_expert_category" id="id" value="{{ isset($data) ? $data->id : '' }}">
                        <div class="form-group">
                            <label for="name" class="mt-2">Select Expert Category <span class="text-danger">*</span></label>
                            <select class="form-control" id="selectExpert" name="category_id">
                                <option value="">Select Expert Category</option>
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name" class="mt-2"> Expert Name <span class="text-danger">*</span></label>
                            <input type="text" name="name"
                            class="form-control @error('name') is-invalid @enderror" 
                            value="{{ old('name', isset($data) ? $data->name : '') }}" required>
                            @error('name')
                            <span class="invalid-feedback form-invalid fw-bold" role="alert">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="name" class="mt-2"> Expert Designation <span class="text-danger">*</span></label>
                            <input type="text" name="expert_designation"
                            class="form-control @error('expert_designation') is-invalid @enderror" 
                            value="{{ old('expert_designation', isset($data) ? $data->expert_designation : '') }}" required>
                            @error('expert_designation')
                            <span class="invalid-feedback form-invalid fw-bold" role="alert">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="name" class="mt-2"> Experience <span class="text-danger">*</span></label>
                            <input type="text" name="expert_experience"
                            class="form-control @error('expert_experience') is-invalid @enderror" 
                            value="{{ old('expert_experience', isset($data) ? $data->expert_experience : '') }}" required>
                            @error('expertDesignation')
                            <span class="invalid-feedback form-invalid fw-bold" role="alert">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="name" class="mt-2"> Qualification <span class="text-danger">*</span></label>
                            <input type="text" name="expert_qualification"
                            class="form-control @error('expert_qualification') is-invalid @enderror" 
                            value="{{ old('expert_qualification', isset($data) ? $data->expert_qualification : '') }}" required>
                            @error('expertDesignation')
                            <span class="invalid-feedback form-invalid fw-bold" role="alert">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name" class="mt-2"> Expert Language <span class="text-danger">*</span></label>
                            <input type="text" name="expert_language"
                            class="form-control @error('expert_language') is-invalid @enderror" 
                            value="{{ old('expert_language', isset($data) ? $data->expert_language : '') }}" required>
                            @error('expertLanguage')
                            <span class="invalid-feedback form-invalid fw-bold" role="alert">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name" class="mt-2"> Expert Description <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="expert_description "></textarea>
                            @error('expert_description')
                            <span class="invalid-feedback form-invalid fw-bold" role="alert">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <input class="btn btn-primary" type="submit"
                            value="{{ isset($data) ? 'Update' : 'Save' }}">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


@endsection
