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

                        <form action="{{ route('webinars.store') }}" method="POST" enctype="multipart/form-data"id="basic-form">
                            @csrf
                            <input type="hidden" name="id" id="id"value="{{ isset($data) ? $data->id : '' }}">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    @if(!empty($data->webinarimage))
                                        <div class="mt-3">
                                            <span class="pip" data-title="{{$data->webinarimage}}">
                                                <img src="{{ url(config('app.webinarimage')).'/'.$data->webinarimage ?? '' }}" alt="" width="150" height="100">
                                            </span>
                                        </div>
                                    @endif
                                    <label for="name" class="mt-2"> Webinar Image <span class="text-danger info">(Only jpeg, png, jpg files allowed)</span></label>
                                    <input type="file" name="webinarimage" class="form-control @error('WebinarImage') is-invalid @enderror" accept="image/jpeg,image/png">
                                    <input type="hidden" class="form-control" name="WebinarImageOld" value="">
                                    @error('WebinarImage')
                                        <span class="invalid-feedback form-invalid fw-bold" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6 mt-auto">
                                    <label for="name" class="mt-2">Select Category <span class="text-danger">*</span></label>
                                    <select class="form-control" id="category_id" name="category_id">
                                            <option value="">Select Category</option>
                                            @foreach($categories as $categorie)
                                            <option value="{{ $categorie->id }}">{{ $categorie->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="webinardescription" class="mt-2"> Webinar Description <span class="text-danger">*</span></label>
                                    <input type="text" name="webinardescription" class="form-control @error('webinardescription') is-invalid @enderror" placeholder=" Webinar Description" value="{{ old('webinardescription', isset($data) ? $data->webinardescription : '') }}" required>
                                    @error('webinardescription')
                                        <span class="invalid-feedback form-invalid fw-bold" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6"> 
                                    <label for="title" class="mt-2">Webinar Title <span class="text-danger">*</span></label>
                                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Webinar Title" value="{{ old('title', isset($data) ? $data->title : '') }}" required>
                                    @error('title')
                                        <span class="invalid-feedback form-invalid fw-bold" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row">
                                <div class="form-group col-md-6 mt-auto">
                                    <label for="name" class="mt-2">Webinar Related To Which Expert <span class="text-danger">*</span></label>
                                    <select class="form-control @error('expert') is-invalid @enderror" name="expert_id">
                                            <option value="">Select Program Expert</option>
                                            @foreach($experts as $expert)
                                            <option value="{{ $expert->id }}">{{ $expert->name }}</option>
                                            @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    @if(!empty($data->webinarvideo))
                                        <div class="mt-3">
                                            <span class="pip" data-title="{{$data->webinarvideo}}">
                                                <img src="{{ url(config('app.webinarvideo')).'/'.$data->webinarvideo ?? '' }}" alt="" width="150" height="100">
                                            </span>
                                        </div> webinarvideo
                                    @endif
                                    <label for="name" class="mt-2"> Webinar Video <span class="text-danger info">*</span></label>
                                    <input type="file" name="webinarvideo" class="form-control @error('webinarvideo') is-invalid @enderror" accept="image/jpeg,image/png">
                                    <input type="hidden" class="form-control" name="webinarvideoOld" value="">
                                    @error('webinarvideo')
                                        <span class="invalid-feedback form-invalid fw-bold" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="date" class="mt-2"> Webinar Start Date <span class="text-danger">*</span></label>
                                    <input type="date" name="date" class="form-control @error('date') is-invalid @enderror" placeholder=" Webinar Description" value="{{ old('date', isset($data) ? $data->date : '') }}" required>
                                    @error('date')
                                        <span class="invalid-feedback form-invalid fw-bold" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6 mt-auto">
                                    <label for="name" class="mt-2">On Which Day <span class="text-danger">*</span></label>
                                        <select class="form-control" id="selectExpert" name="week_id">
                                        <option value="">Select Day</option>
                                            @foreach($weeks as $week)
                                            <option value="{{ $week->id }}">{{ $week->name }}</option>
                                            @endforeach
                                        </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="duration_in_minutes" class="mt-2"> Duration in minutes <span class="text-danger">*</span></label>
                                    <input type="text" name="duration_in_minutes" class="form-control @error('duration_in_minutes') is-invalid @enderror" placeholder="Example:- 120 Min" value="{{ old('duration_in_minutes', isset($data) ? $data->duration_in_minutes : '') }}" required>
                                    @error('duration_in_minutes')
                                        <span class="invalid-feedback form-invalid fw-bold" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6 mt-auto">
                                    <label for="name" class="mt-2">Start Time <span class="text-danger">*</span></label>
                                        <select class="form-control" id="selectExpert" name="start_time">
                                            <option value="">Select Time</option>
                                            @foreach($times as $time)
                                            <option value="{{ $time->id }}">{{ $time->time }}</option>
                                            @endforeach
                                        </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6 mt-auto">
                                    <label for="name" class="mt-2">End Time <span class="text-danger">*</span></label>
                                        <select class="form-control" id="selectTime" name="end_time">
                                            <option value="">End Time</option>
                                            @foreach($times as $time)
                                            <option value="{{ $time->id }}">{{ $time->time }}</option>
                                            @endforeach
                                        </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="webinar_price" class="mt-2"> Webinar Price <span class="text-danger">*</span></label>
                                    <input type="text" name="webinar_price" class="form-control @error('webinar_price') is-invalid @enderror" placeholder=" Webinar Price" value="{{ old('webinar_price', isset($data) ? $data->webinar_price : '') }}" required>
                                    @error('webinar_price')
                                        <span class="invalid-feedback form-invalid fw-bold" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="whatsapp_group_link" class="mt-2"> Whatsapp group link <span class="text-danger">*</span></label>
                                    <input type="text" name="whatsapp_group_link" class="form-control @error('whatsapp_group_link') is-invalid @enderror" placeholder=" Webinar Price" value="{{ old('whatsapp_group_link', isset($data) ? $data->whatsapp_group_link : '') }}" required>
                                    @error('whatsapp_group_link')
                                        <span class="invalid-feedback form-invalid fw-bold" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="session_will_cover" class="mt-2">Session Will Cover<span class="text-danger">*</span></label>
                                    <div>Heading</div>
                                    <input type="text" name="heading" class="form-control @error('heading') is-invalid @enderror" placeholder=" " value="{{ old('heading', isset($data) ? $data->heading : '') }}" required>
                                    @error('heading')
                                    <span class="invalid-feedback form-invalid fw-bold" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                    <div>Defination</div>  
                                    <input type="text" name="defination" class="form-control mb-4 @error('defination') is-invalid @enderror" placeholder=" " value="{{ old('defination', isset($data) ? $data->defination : '') }}" required>
                                    @error('defination')
                                        <span class="invalid-feedback form-invalid fw-bold" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                    <div id="newinput"></div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="d-flex justify-content-end">
                                        <button id="session_will_cover" type="button" class="btn btn-warning">ADD MORE</button>
                                    </div>
                                </div>
                            </div>

                             <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="you_Will_learn_input" class="mt-2">You Will Learn<span class="text-danger">*</span></label>
                                    <input type="text" id="you_Will_learn_input" name="you_Will_learn" class="form-control @error('you_Will_learn') is-invalid @enderror" placeholder=" " value="{{ old('you_Will_learn', isset($data) ? $data->you_Will_learn : '') }}" required>
                                    @error('you_Will_learn')
                                    <span class="invalid-feedback form-invalid fw-bold" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="d-flex justify-content-end">
                                        <button id="add_more_you_will_learn" type="button" class="btn btn-warning">ADD MORE</button>
                                    </div>
                                </div>
                            </div>
                            <div id="youWillLearnFieldsContainer"></div> 


                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="who_is_it_for" class="mt-2">Who is it For<span class="text-danger">*</span></label>
                                    <input type="text" id="who_is_it_for" name="who_is_it_for" class="form-control @error('you_Will_learn') is-invalid @enderror" placeholder=" " value="{{ old('you_Will_learn', isset($data) ? $data->you_Will_learn : '') }}" required>
                                    @error('who_is_it_for')
                                    <span class="invalid-feedback form-invalid fw-bold" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="d-flex justify-content-end">
                                        <button id="add_more_who_is_it_for" type="button" class="btn btn-warning">ADD MORE</button>
                                    </div>
                                </div>
                                <div id="youWillLearnFieldswhoIsItFor"></div> 
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

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
      $("#session_will_cover").click(function (){
        var newRowAdd = '<div class="rowWrapper">' +
        '<div class="row">' +
        '<div class="text-end">' +
                    '<button class="btn btn-danger DeleteRow" type="button">' +
                    '<i class="bi bi-trash-fill"></i> Remove</button>' +
                    '</div>' +
                    '<div class="form-group col-md-12">' +
                    '<label for="heading" class="mt-2">Heading</label>' +
                    '<input type="text" class="form-control m-input heading-input">' +
                    '</div>' +
                    '<div class="form-group col-md-12">' +
                    '<label for="definition" class="mt-2">Definition</label>' +
                    '<input type="text" class="form-control m-input definition-input">' +
                    '</div>' +
                    '</div>' +
                
                    '</div>';
                $('#newinput').append(newRowAdd);
            });;
            $("body").on("click", ".DeleteRow", function ()
            {
                $(this).closest(".rowWrapper").remove();
            });

            $(document).ready(function()
            {
                $("#add_more_you_will_learn").click(function() {
                    var newInputField = '<div class="row youWillLearnRow">' +
                    '<div class="form-group col-md-6">' +
                    '<input type="text" name="you_Will_learn[]" class="form-control" placeholder=" ">' +
                    '</div>' +
                    '<div class="form-group col-md-6">' +
                    '<button class="btn btn-danger removeYouWillLearn" type="button">' +
                    '<i class="bi bi-trash-fill"></i>' +
                    '</button>' +
                    '</div>' +
                    '</div>';
                    $("#youWillLearnFieldsContainer").append(newInputField);
                });
                $("body").on("click", ".removeYouWillLearn", function() {
                    $(this).closest(".youWillLearnRow").remove();
                });
            });

            $(document).ready(function()
            {
                $("#add_more_who_is_it_for").click(function() {
                    var newInputField = '<div class="row youWillLearnRow">' +
                    '<div class="form-group col-md-6">' +
                    '<input type="text" name="who_is_it_for[]" class="form-control" placeholder=" ">' +
                    '</div>' +
                    '<div class="form-group col-md-6">' +
                    '<button class="btn btn-danger removeYouWillLearn" type="button">' +
                    '<i class="bi bi-trash-fill"></i>' +
                    '</button>' +
                    '</div>' +
                    '</div>';
                    $("#youWillLearnFieldswhoIsItFor").append(newInputField);
                });
                $("body").on("click", ".removeYouWillLearn", function() {
                    $(this).closest(".youWillLearnRow").remove();
                });
            });
            
    </script>

@endsection