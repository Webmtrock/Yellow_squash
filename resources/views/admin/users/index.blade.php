@extends('layouts.app')
@section('content')
@if(Session::has('success'))
<div class="alert alert-success">
    {{ Session::get('success') }}
</div>
@endif

<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">

        @if(Session::has('success'))
            @section('scripts')
                <script>swal("Good job!", "{{ Session::get('success') }}", "success");</script>
            @endsection
        @endif

        @if(Session::has('error'))
            @section('scripts')
                <script>swal("Oops...", "{{ Session::get('error') }}", "error");</script>
            @endsection
        @endif
        
        <div class="row">
            <div class="col-lg-12">
                <div class="row tabelhed d-flex justify-content-between">
                    {{-- <div class="col-lg-2 col-md-2 col-sm-2 d-flex">
                            <a href="{{ route('users.create') }}" class="btn btn-primary btn-lg float-left">Add User</a>
                    </div> --}}

                    <div class="col-lg-10 col-md-10"> 

                        <div class="right-item d-flex justify-content-end" >

                            <!-- <div class="p-0">
                                <select class="form-control" id="role" name="role">
                                    <option value="">Select Role</option>
                                    <option value="driver" {{ isset($role) ? ($role == "driver" ? 'selected' : '' ) : '' }}>Driver</option>
                                    <option value="vendor" {{ isset($role) ? ($role == "vendor" ? 'selected' : '' ) : '' }}>Vendor</option>
                                    <option value="customer" {{ isset($role) ? ($role == "customer" ? 'selected' : '' ) : '' }}>Customer</option>
                                </select>
                            </div>

                            <div class="p-0 mx-1">
                                <select class="form-control" id="status" name="status">
                                    <option value="">Select Status</option>
                                    <option value="active" {{ isset($status) ? ($status == "active" ? 'selected' : '' ) : '' }} >Active</option>
                                    <option value="in-active" {{ isset($status) ? ($status == "in-active" ? 'selected' : '' ) : '' }} >In-Active</option>
                                </select>
                            </div> -->

                            <!-- <form action="" method="GET" class="d-flex">
                                <input type="text" name="keyword" id="keyword" class="form-control" value="{{ isset($keyword) ? $keyword : '' }}" placeholder="Search" required>

                                <button class="btn-sm search-btn keyword-btn" type="submit">
                                    <i class="ti-search pl-3" aria-hidden="true"></i>
                                </button>

                                <a href="" class="btn-sm reload-btn">
                                    <i class="ti-reload pl-3 redirect-icon" aria-hidden="true"></i>
                                </a>
                            </form> -->
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header ">
                        <div class="row">
                            <div class="col-xl-6 col-md-6 mt-auto">
                                <h5>Users</h5>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="row float-end">
                                    <div class="col-xl-12 d-flex float-end">
                                        <a href="{{ route('users.create') }}" class="btn btn-primary btn-lg float-left">Add User</a>
                                        {{-- <div class="items paginatee">
                                            <form action="" method="GET">
                                                <select class="form-select m-0 items" name="items" id="items" aria-label="Default select example">
                                                    <option value='10' {{ isset($items) ? ($items == '10' ? 'selected' : '' ) : '' }}>10</option>
                                                    <option value='20' {{ isset($items) ? ($items == '20' ? 'selected' : '' ) : '' }}>20</option>
                                                    <option value='30' {{ isset($items) ? ($items == '30' ? 'selected' : '' ) : '' }}>30</option>
                                                    <option value='40' {{ isset($items) ? ($items == '40' ? 'selected' : '' ) : '' }}>40</option>
                                                    <option value='50' {{ isset($items) ? ($items == '50' ? 'selected' : '' ) : '' }}>50</option>
                                                </select>

                                                @if(isset($_GET['keyword']))<input type="hidden" name="keyword" value="{{$_GET['keyword']}}">@endif
                                            </form>
                                        </div> --}}
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
                                        <th class="width-10">S No.</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th class="text-center w-25">Action</th>
                                    </tr>
                                </thead>

                                

                                    @foreach($users as $key => $user)
                                        <tr data-entry-id="{{ $user->id }}">
                                            <td>{{ $user->id ?? '' }}</td>
                                            <td>{{ $user->name ?? '' }}</td>
                                            <td>{{ $user->phone ?? '' }}</td>
                                            <td>{{ $user->email ?? '' }}</td>
                                            <td>
                                            <span class="{{ $user->status == '1' ? 'badge badge-success' : 'badge badge-danger' }}">
                                                {{ $user->status == '1' ? 'Active' : 'Inactive' }}
                                            </span>
                                        </td>
                                            <td>
                                            <a href="{{ route('users.edit', ['id' => $user->id]) }}" class="btn btn-primary"> <i class="fas fa-pencil-alt"></i></a>
                                            <a href="{{ route('users.delete', ['id' => $user->id]) }}" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{ $user->id }}"><i class="fas fa-trash-alt"></i></a>

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

@endsection
@foreach ($users as $user)
<div class="modal fade" id="exampleModal{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <form id="deleteForm{{ $user->id }}" action="{{ route('users.delete', ['id' => $user->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Yes, Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach


