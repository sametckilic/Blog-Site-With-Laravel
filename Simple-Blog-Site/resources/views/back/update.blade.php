@extends('back.layouts.master')
@section('title', 'Create Post')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">@yield('title')
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <form method="post" action="{{ route('articleupdate', $article->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" value="{{ $article->title }}" required>
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <select class="form-control" name="category" value="{{ $article->category }}" required>
                        @foreach ($categories as $category)
                            <option>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Cover Photo</label><br>
                    <img src="{{ asset('images') . '/' . $article->photo }}" width="200">
                </div>
                <div class="form-group">
                    <label>Change Cover Photo</label>
                    <input type="file" name="coverphoto" class="form-control" value=""></input>
                </div>
                <div class="form-group">
                    <label>Photos</label><br>
                    @foreach ($photos as $photo)
                        <img src="{{ asset('images') . '/' . $photo->photo }}" width="200">
                        <a href="{{ route('deletePhoto', [$article->id, $photo->id]) }}" title="Delete"
                            class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a><br><br>
                    @endforeach
                    <div class="form-group">
                        <label>Upload Photos</label>
                        <input type="file" name="photos[]" class="form-control" multiple="multiple" required></input>
                    </div>
                    <div class="form-group">
                        <label>Order Number</label>
                        <select class="form-control" name="orderNumber" value="" required>
                            @for ($i = 1; $i <= 100; $i++)
                                @if ($article->orderNumber == $i)
                                    <option selected> {{ $i }} </option>
                                @else
                                    <option> {{ $i }} </option>
                                @endif
                            @endfor
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Article</label>
                        <textarea id="editor" name="article" class="form-control" rows="4">{{ $article->article }}</textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Update Post</button>
                    </div>
            </form>
        </div>
    </div>
@endsection
@section('css')
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
@endsection
@section('js')
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
    <script></script>
@endsection
