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

                        <a href="{{route('expert.create')}}" class="btn btn-primary btn btn-lg mb-2 ">
                            <i class="fe fe-plus mx-1 align-middle"></i>Create Expert
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
                                    <h5>Experts</h5>
                                </div>

                            </div>
                        </div>

                        <div class="card-body">
                            <div class="table">
                                <table id="example" class="table table-striped table-bordered">
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

                                    @foreach($expert as $experts)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{$experts->category->title ?? ''}}</th>
                                        <td>{{$experts->name ?? ''}}</td>
                                        <td>{{$experts->expert_designation ?? ''}}</td>
                                        <td>{{$experts->expert_experience ?? ''}}</td>
                                        <td>{{$experts->expert_qualification ?? ''}}</td>
                                        <td>{{$experts->expert_language ?? ''}}</td>
                                        <td>{{$experts->expert_description ?? ''}}</td>

                                        <td>
                                            <a href="expert/{{$experts->id}}/edit" class="btn btn-primary btn-sm"> <i
                                                    class="fas fa-pencil-alt"></i></a>

                                            <a href="{{ route('expert.destroy', ['id' => $experts->id]) }}"
                                                class="btn btn-danger btn-sm" data-toggle="modal"
                                                data-target="#exampleModal{{ $experts->id }}">
                                                <i class="fas fa-trash-alt"></i></a>

                                        </td>
                                    </tr>
                                    @endforeach


                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @foreach ($expert as $experts)
    <div class="modal fade" id="exampleModal{{ $experts->id }}" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this user?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!-- Delete Form -->
                    <form id="deleteForm{{ $experts->id }}"
                        action="{{ route('expert.destroy', ['id' => $experts->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Yes, Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @endsection