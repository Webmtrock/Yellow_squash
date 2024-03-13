@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <!-- Content -->
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
                <div class="row tabelhed d-flex justify-content-between">
                    <div class="col-lg-2 col-md-2 col-sm-2 d-flex">

                        <a href="{{route('webinars.create')}}" class="btn btn-primary btn btn-lg">
                            <i class="fe fe-plus mx-1 align-middle"></i>Add Webinar
                        </a>
                    </div>


                    <div class="col-lg-10 col-md-10">
                        <div class="right-item d-flex justify-content-end">

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header ">
                            <div class="row">
                                <div class="col-xl-6 col-md-6 mt-auto">
                                    <h5>Webinars</h5>
                                </div>
                                <div class="col-xl-6 col-md-6">
                                    <div class="row float-end">
                                        <div class="col-xl-12 d-flex float-end">
                                            <div class="items paginatee">
                                                <select class="form-select m-0 items" name="items" id="items"
                                                    aria-label="Default select example">
                                                    <option value='10'
                                                        {{ isset($items) ? ($items == '10' ? 'selected' : '' ) : '' }}>
                                                        10
                                                    </option>
                                                    <option value='20'
                                                        {{ isset($items) ? ($items == '20' ? 'selected' : '' ) : '' }}>
                                                        20
                                                    </option>
                                                    <option value='30'
                                                        {{ isset($items) ? ($items == '30' ? 'selected' : '' ) : '' }}>
                                                        30
                                                    </option>
                                                    <option value='40'
                                                        {{ isset($items) ? ($items == '40' ? 'selected' : '' ) : '' }}>
                                                        40
                                                    </option>
                                                    <option value='50'
                                                        {{ isset($items) ? ($items == '50' ? 'selected' : '' ) : '' }}>
                                                        50
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="table">
                                <table id="datatable" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Select Category</th>
                                            <th scope="col">Expert Name</th>
                                            <th scope="col">Expert Designation</th>
                                            <th scope="col">Experience</th>
                                            <th scope="col">Qualification</th>
                                            <th scope="col">Expert Language</th>
                                            <th scope="col">Expert D-escription</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>

                                    


                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection