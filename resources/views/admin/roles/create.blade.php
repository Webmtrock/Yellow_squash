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
        <style>

        </style>
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header border-bottom">
                        {{ isset($data) && isset($data->id) ? 'Edit Role' : 'Create Role' }}
                    </div>
                    <div class="card-body">
                        <form action="{{ route('roles.store') }}" method="POST" enctype="multipart/form-data"
                            id="basic-form">
                            @csrf
                            <input type="hidden" name="id" id="id" value="{{ isset($data) ? $data->id : '' }}">

                            <div class="form-group">
                                <label for="name" class="mt-2"> Title <span class="text-danger">*</span></label>
                                <input type="text" name="title"
                                    class="form-control @error('title') is-invalid @enderror" placeholder="Title"
                                    value="{{ old('title', isset($data) ? $data->name : '') }}" required>
                                @error('title')
                                <span class="invalid-feedback form-invalid fw-bold" role="alert">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="mt-2"> Permissions <span class="text-danger">*</span></label>
                                <span class="badge badge-opacity-primary selectAll"
                                    style="color: #046CC7; cursor: pointer;">Select All</span>
                                <span class="badge badge-opacity-primary deselectAll"
                                    style="color: #046CC7; cursor: pointer;">Deselect All</span>
                                <select name="permissions[]"
                                    class="form-control form-select @error('permissions') is-invalid @enderror select2 permissions"
                                    multiple>
                                    @foreach($permissions as $key => $value)
                                    <option value="{{ $key }}"
                                        {{ (in_array($key, old('permissions', [])) || isset($data) && $data->permissions->contains($key)) ? 'selected' : '' }}>
                                        {{ $value }}
                                    </option>
                                    @endforeach
                                </select>
                                @error('permissions')
                                <span class="invalid-feedback form-invalid fw-bold" role="alert">{{ $message }}</span>
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

@section('scripts')
<script>
$(document).ready(function() {
    $('.select2').select2();
    $('.selectAll').on('click', function() {
        $('.permissions option').prop('selected', true);
        $('.permissions').trigger('change');
    });

    $('.deselectAll').on('click', function() {
        $('.permissions option').prop('selected', false);
        $('.permissions').trigger('change');
    });
});
</script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
@endsection