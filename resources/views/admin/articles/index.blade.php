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

                        <a href="{{route('article.create')}}" class="btn btn-primary btn btn-lg">
                            <i class="fe fe-plus mx-1 align-middle"></i>Add Article
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
                                    <h5>New Blog</h5>
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
                                <table id="example" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Article Title</th>
                                            <th scope="col">Summary</th>
                                            <th scope="col">Select Category</th>
                                            <th scope="col">Select Article Author</th>
                                            <th scope="col">Banner Image</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    @foreach($articles as $article)

                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{$article->article_title ?? ''}}</td>
                                        <td>{{$article->summary ?? ''}}</td>
                                        <td>{{$article->category->title ?? ''}}</td>
                                        <td>{{$article->experts->name ?? ''}}</td>
                                        <!-- <td>{{$article->banner_image ?? ''}}</td> -->
                                        <td class="text-center">
                                            <div class="d-flex align-items-center justify-content-center">
                                                <a href="{{ asset('uploads/'.$article->banner_image) }}"
                                                    target="_blank">
                                                    <img src="{{ asset('uploads/'.$article->banner_image) }}"
                                                        alt="Image"
                                                        style="max-width: 60px; max-height: 60px; border-radius: 50%;">
                                                </a>
                                            </div>
                                        </td>


                                        <td>
                                            <a href="{{ route('article.edit', ['id' => $article->id]) }}"
                                                class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i></a>

                                            <a href="{{ route('article.delete', $article->id) }}"
                                                class="btn btn-danger btn-sm" data-toggle="modal"
                                                data-target="#exampleModal{{ $article->id }}">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>

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


    @foreach($articles as $article)
    <div class="modal fade" id="exampleModal{{ $article->id }}" tabindex="-1" role="dialog"
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
                    <p>Are you sure you want to delete this Article?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!-- Delete Form -->
                    <form id="deleteForm{{ $article->id }}"
                        action="{{ route('article.delete', ['id' => $article->id]) }}" method="POST">
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