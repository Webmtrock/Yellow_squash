@extends('layouts.app')
@section('content')
<div style="text-align: center;">
    <h1>Update Category</h1>
    <a href="{{ route('categories.index') }}" class="btn btn-danger btn-lg float-right">Back</a>
</div>
<div class="content-wrapper">
    <body>
        <div class="container mt-3 mb-3">
            <form action="{{ route('categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group mb-2">
                    <label>Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror"  name="title" id="title" value="{{ $category->title }}" placeholder="Enter the Title">
                    @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                 <div class="form-group mb-2">
                <label>Status</label>
                <select name="status" class="form-control">
                    <option value="1" {{ $category->status == 1 ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ $category->status == 0 ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>

                <input type="submit" value="Update" class="btn btn-primary">
            </form>
        </div>
    </body>

    </html>
</div>
@endsection
