@extends('back.layouts.master')
@section('title', 'All Posts')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">@yield('title')
                <span class="float-right">{{ $articles->count() }} posts found.</strong>
            </h6>
        </div>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Post ID</th>
                            <th>Photo</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Created Date</th>
                            <th>Last Update Date</th>
                            <th>Order Number</th>
                            <th>Processes</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($articles as $article)
                            <tr>
                                <td>{{ $article->id }}</td>
                                
                                <td>
                                    <img src="{{ asset("images/".$article->photo) }}" width="200">
                                </td>
                                <td>{{ $article->title }}</td>
                                <td>{{ $article->category }}</td>
                                <td>{{ $article->created_at }}</td>
                                <td>{{ $article->updated_at }}</td>
                                <td>{{$article->orderNumber}}</td>


                                <td>
                                    <a target="_blank" href="{{ route('single', [$article->id]) }}" title="Show"
                                        class="btn btn-sm btn-success"><i class="fa fa-eye"></i> </a>

                                    <a href="{{ route('editarticle', $article->id) }}" title="Edit"
                                        class="btn btn-sm btn-primary"><i class="fa fa-pen"></i> </a>

                                    <a href="{{ route('deletearticle', $article->id )}}" title="Delete" 
                                        class="btn btn-sm btn-danger"><i class="fa fa-times"></i> </a> 
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('css')
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
@endsection
@section('js')
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script></script>
@endsection
