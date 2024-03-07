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
                        Edit Expert
                        <!-- {{ isset($data) && isset($data->id) ? 'Edit Expert' : 'Create Expert' }} -->
                    </div>
                    <div class="card-body">

                        <!-- <form action="{{route('expert.update' , $expert->id)}}" method="POST"
                            enctype="multipart/form-data" id="basic-form"> -->
                        <form action="{{ route('expert.update',$expert->id) }}" method="POST"
                            enctype="multipart/form-data" id="update-form">
                            @method('PUT')
                            @csrf
                            <input type="hidden" name="expert_category_id" id="id"
                                value="{{old('name',$expert->expert_category_id)}}">
                            <!-- <div class="form-group">
                                <label for="name" class="mt-2">Select Expert Category <span
                                        class="text-danger">*</span></label>
                                <select class="form-control" id="selectExpert" name="select_expert_category">
                                    <option value="{{old('name',$expert->select_expert_category)}}"></option>

                                </select>
                            </div> -->
                            <div class="form-group">
                                <label for="selectExpert" class="mt-2">Select Expert Category <span
                                        class="text-danger">*</span></label>
                                <select class="form-control" id="selectExpert" name="expert_category_id">
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ old('expert_category_id', $expert->expert_category_id) == $category->id ? 'selected' : '' }}>
                                        {{ $category->title }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="name" class="mt-2"> Expert Name <span class="text-danger">*</span></label>
                                <input type="text" name="name"
                                    class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                    value="{{old('name',$expert->name)}}" required>
                                @if($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>


                            <div class="form-group">
                                <label for="name" class="mt-2"> Expert Designation <span
                                        class="text-danger">*</span></label>
                                <input type="text" name="expert_designation"
                                    class="form-control @error('expert_designation') is-invalid @enderror"
                                    value="{{ old('expert_designation', isset($expert) ? $expert->expert_designation : '') }}"
                                    required>
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
                                    value="{{ old('expert_experience', isset($expert) ? $expert->expert_experience : '') }}"
                                    required>
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
                                    value="{{ old('expert_qualification', isset($expert) ? $expert->expert_qualification : '') }}"
                                    required>
                                @error('expertDesignation')
                                <span class="invalid-feedback form-invalid fw-bold" role="alert">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="name" class="mt-2"> Expert Language <span
                                        class="text-danger">*</span></label>
                                <input type="text" name="expert_language"
                                    class="form-control @error('expert_language') is-invalid @enderror"
                                    value="{{ old('expert_language', isset($expert) ? $expert->expert_language : '') }}"
                                    required>
                                @error('expertLanguage')
                                <span class="invalid-feedback form-invalid fw-bold" role="alert">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="name" class="mt-2">Expert Description <span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control" name="expert_description"
                                    id="exampleFormControlTextarea1" rows="3">{{ old('expert_description', isset($expert) ? $expert->expert_description : '') }}
                                </textarea>

                                @error('expert_description')
                                <span class="invalid-feedback form-invalid fw-bold" role="alert">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>

                            <div class="mt-3">
                                <input class="btn btn-primary" type="submit" value="Update">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection