@extends('layouts.app')
@section('content')
<div style="text-align: center;">
    <h1>Add Category</h1>
    <a href="{{ route('categories.index') }}" class="btn btn-danger btn-sm btn-lg float-right mr-4 ">Back</a>
</div>
<div class="content-wrapper">

    <body>
        <div class="container mt-3 mb-3">
            <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group mb-2">
                    <label>Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                        placeholder="Enter the Title">
                    @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <input type="submit" value="Submit" class="btn btn-success">

            </form>
        </div>
    </body>

    </html>
</div>
@endsection