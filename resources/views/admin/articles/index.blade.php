@extends('layouts.app')
@section('content')
<div class="content-wrapper">


    <div class="row">
        <div class="col-lg-12">
            <div class="row tabelhed d-flex justify-content-between">
                <div class="d-flex align-items-end flex-row-reverse">

                    <a href="{{route('article.create')}}" class="btn btn-warning btn btn-lg ml-2 text-dark">
                        Add Article
                    </a>
                    <a href="{{route('article.draftedIndex')}}" class="btn bg-black text-white btn btn-lg">
                        Drafted Article
                    </a>
                    <!-- <a href="{{ url('article.draft') }}" class="btn bg-black text-white btn-lg">
                            Drafted Article
                        </a> -->

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

                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table">
                            <table id="datatable" class="table table-striped table-bordered">
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
                                            <a href="{{ asset('uploads/'.$article->banner_image) }}" target="_blank">
                                                <img src="{{ asset('uploads/'.$article->banner_image) }}" alt="Image"
                                                    style="width: 60px; height: 60px; border-radius: 50%;">
                                                <!--                                                     
                                                    <img src="{{ asset('storage/uploads/' . $article->banner_image) }}"
                                                        alt="Banner Image"
                                                        style="width: 60px; height: 60px; border-radius: 50%;"> -->


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