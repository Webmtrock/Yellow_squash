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
                        Create webinar
                    </div>
                    <div class="card-body">

                        <form action="{{ route('expert.store') }}" method="POST" enctype="multipart/form-data"id="basic-form">
                            @csrf
                            <input type="hidden" name="expert_category_id" id="id"value="{{ isset($data) ? $data->id : '' }}">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    @if(!empty($data->profile_image))
                                        <div class="mt-3">
                                            <span class="pip" data-title="{{$data->profile_image}}">
                                                <img src="{{ url(config('app.profile_image')).'/'.$data->profile_image ?? '' }}" alt="" width="150" height="100">
                                            </span>
                                        </div>
                                    @endif
                                    <label for="name" class="mt-2"> Webinar Image <span class="text-danger info">(Only jpeg, png, jpg files allowed)</span></label>
                                    <input type="file" name="profileImage" class="form-control @error('profileImage') is-invalid @enderror" accept="image/jpeg,image/png">
                                    <input type="hidden" class="form-control" name="profileImageOld" value="">
                                    @error('profileImage')
                                        <span class="invalid-feedback form-invalid fw-bold" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6 mt-auto">
                                    <label for="name" class="mt-2">Select Category <span class="text-danger">*</span></label>
                                        <select class="form-control" id="selectExpert" name="expert_category_id">
                                            <option value="">Select Expert Category</option>
                                        </select>
                                    </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="middle_name" class="mt-2"> Webinar Description <span class="text-danger">*</span></label>
                                    <input type="text" name="middle_name" class="form-control @error('middle_name') is-invalid @enderror" placeholder=" Webinar Description" value="{{ old('middle_name', isset($data) ? $data->middle_name : '') }}" required>
                                    @error('middle_name')
                                        <span class="invalid-feedback form-invalid fw-bold" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="middle_name" class="mt-2"> Webinar Title <span class="text-danger">*</span></label>
                                    <input type="text" name="middle_name" class="form-control @error('middle_name') is-invalid @enderror" placeholder="Webinar Title" value="{{ old('middle_name', isset($data) ? $data->middle_name : '') }}" required>
                                    @error('middle_name')
                                        <span class="invalid-feedback form-invalid fw-bold" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row">
                                <div class="form-group col-md-6 mt-auto">
                                    <label for="name" class="mt-2">Webinar Related To Which Expert <span class="text-danger">*</span></label>
                                        <select class="form-control" id="selectExpert" name="expert_category_id">
                                            <option value="">Select Expert</option>
                                        </select>
                                </div>
                                <div class="form-group col-md-6">
                                    @if(!empty($data->profile_image))
                                        <div class="mt-3">
                                            <span class="pip" data-title="{{$data->profile_image}}">
                                                <img src="{{ url(config('app.profile_image')).'/'.$data->profile_image ?? '' }}" alt="" width="150" height="100">
                                            </span>
                                        </div>
                                    @endif
                                    <label for="name" class="mt-2"> Webinar Video <span class="text-danger info">*</span></label>
                                    <input type="file" name="profileImage" class="form-control @error('profileImage') is-invalid @enderror" accept="image/jpeg,image/png">
                                    <input type="hidden" class="form-control" name="profileImageOld" value="">
                                    @error('profileImage')
                                        <span class="invalid-feedback form-invalid fw-bold" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="middle_name" class="mt-2"> Webinar Start Date <span class="text-danger">*</span></label>
                                    <input type="date" name="middle_name" class="form-control @error('middle_name') is-invalid @enderror" placeholder=" Webinar Description" value="{{ old('middle_name', isset($data) ? $data->middle_name : '') }}" required>
                                    @error('middle_name')
                                        <span class="invalid-feedback form-invalid fw-bold" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6 mt-auto">
                                    <label for="name" class="mt-2">On Which Day <span class="text-danger">*</span></label>
                                        <select class="form-control" id="selectExpert" name="expert_category_id">
                                            <option value="">Select Day</option>
                                        </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="middle_name" class="mt-2"> Duration in minutes <span class="text-danger">*</span></label>
                                    <input type="text" name="middle_name" class="form-control @error('middle_name') is-invalid @enderror" placeholder="Example:- 120 Min" value="{{ old('middle_name', isset($data) ? $data->middle_name : '') }}" required>
                                    @error('middle_name')
                                        <span class="invalid-feedback form-invalid fw-bold" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6 mt-auto">
                                    <label for="name" class="mt-2">Start Time <span class="text-danger">*</span></label>
                                        <select class="form-control" id="selectExpert" name="expert_category_id">
                                            <option value="">Start Time</option>
                                        </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6 mt-auto">
                                    <label for="name" class="mt-2">End Time <span class="text-danger">*</span></label>
                                        <select class="form-control" id="selectExpert" name="expert_category_id">
                                            <option value="">End Time</option>
                                        </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="middle_name" class="mt-2"> Webinar Price <span class="text-danger">*</span></label>
                                    <input type="text" name="middle_name" class="form-control @error('middle_name') is-invalid @enderror" placeholder=" Webinar Price" value="{{ old('middle_name', isset($data) ? $data->middle_name : '') }}" required>
                                    @error('middle_name')
                                        <span class="invalid-feedback form-invalid fw-bold" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="middle_name" class="mt-2"> Whatsapp group link <span class="text-danger">*</span></label>
                                    <input type="text" name="middle_name" class="form-control @error('middle_name') is-invalid @enderror" placeholder=" Webinar Price" value="{{ old('middle_name', isset($data) ? $data->middle_name : '') }}" required>
                                    @error('middle_name')
                                        <span class="invalid-feedback form-invalid fw-bold" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="middle_name" class="mt-2"> Session Will Cover<span class="text-danger">*</span></label>
                                    <div>Heading</div>                                  
                                    <input type="text" name="middle_name" class="form-control @error('middle_name') is-invalid @enderror" placeholder=" " value="{{ old('middle_name', isset($data) ? $data->middle_name : '') }}" required>
                                    @error('middle_name')
                                        <span class="invalid-feedback form-invalid fw-bold" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                    <div>Defination</div>  
                                    <input type="text" name="middle_name" class="form-control mb-4 @error('middle_name') is-invalid @enderror" placeholder=" " value="{{ old('middle_name', isset($data) ? $data->middle_name : '') }}" required>
                                    @error('middle_name')
                                        <span class="invalid-feedback form-invalid fw-bold" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                     <div id="newinput"></div>
                                     
                                    <!-- <a href="" class="btn btn-primary btn btn-lg" style="margin-right: 10px;"><i class="fe fe-plus mx-1 align-middle"></i>Add Webinar</a> -->
                            </div>
                            <div class="form-group col-md-6">
                            <button id="rowAdder" type="button" class="btn btn-dark">
                                        <span class="bi bi-plus-square-dotted"></span>ADD MORE
                                    </button>                    
                        </div>
                        <div class="mt-6">
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
<script>

</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
        $("#rowAdder").click(function () {
        newRowAdd =
        '<div class="rowWrapper">' +
        '<button class="btn btn-danger DeleteRow" type="button">' +
        '<i class="bi bi-trash"></i> Remove</button>' +
        '<div>Heading</div>' +
        '<div class="row">' +
        '<div class="input-group m-3">' +
        '<div class="input-group-prepend">' +
        '</div>' +
        '<input type="text" class="form-control m-input heading-input">' + // Input field for heading
        '</div>' +
        '</div>' +
        '<div>Definition</div>' +
        '<div class="row">' +
        '<div class="input-group m-3">' +
        '<div class="input-group-prepend">' +
        '</div>' +
        '<input type="text" class="form-control m-input definition-input">' + // Input field for definition
        '</div>' +
        '</div>' +
        '</div>';
        $('#newinput').append(newRowAdd); 
    });

    $("body").on("click", ".DeleteRow", function () {
        $(this).closest(".rowWrapper").remove();

    });
    </script>
@endsection