@extends('layouts.app')
@section('content')
<div style="text-align: center;">
    <h1>Add User</h1>
    <a href="{{ route('users.index') }}" class="btn btn-danger btn-lg float-right">Back</a>
</div>
<div class="content-wrapper">
    <body>
        <div class="container mt-3 mb-3">
            <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group mb-2">
                    <label>Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror"  name="name" id="name" placeholder="Enter the Name">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <label>Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror"  name="email" id="email" placeholder="Enter the Email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <!-- <div class="form-group mb-2">
                    <label>Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Enter the Password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div> -->
                <div class="form-group mb-2">
                    <label>Phone</label>
                    <input type="phone" class="form-control @error('phone') is-invalid @enderror"  name="phone" id="phone" placeholder="Enter the Phone">
                    @error('phone')
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
