@extends('back.layouts.master')
@section('title','Update Infos')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">@yield('title')
    </div>
    <div class="card-body">
      @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
              <li>{{$error}}</li>
            @endforeach
        </div>
      @endif
      <div class="card-body">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
      <form method="post" action="{{route('updateinfos',$infos)}}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
            <div class="form-group">
                <label>Side Bar Name</label>
                <input type="text" name="sidebarName" class="form-control" value= "{{$infos->sidebarName}}" required></input>
            </div>
            <div class="form-group">
                <label>Side Bar Photo</label>
                <input type="text" name="sidebarPhoto" class="form-control" value= "{{$infos->sidebarPhoto}}" required></input>
            </div>
            <div class="form-group">
                <label>Side Bar Abstract</label>
                <input type="text" name="sidebarAbstract" class="form-control" value= "{{$infos->sidebarAbstract}}" required></input>
            </div>
            <div class="form-group">
                <label>Side Bar Facebook</label>
                <input type="text" name="sidebarFacebook" class="form-control" value= "{{$infos->sidebarFacebook}}" required></input>
            </div>
            <div class="form-group">
                <label>Side Bar Twitter</label>
                <input type="text" name="sidebarTwitter" class="form-control" value= "{{$infos->sidebarTwitter}}" required></input>
            </div>
            <div class="form-group">
                <label>Side Bar Instagram</label>
                <input type="text" name="sidebarInstagram" class="form-control" value= "{{$infos->sidebarInstagram}}" required></input>
            </div>
            <div class="form-group">
                <label>Side Bar Linkedin</label>
                <input type="text" name="sidebarLinkedin" class="form-control" value= "{{$infos->sidebarLinkedin}}" required></input>
            </div>
            <div class="form-group">
                <label>Contact Address</label>
                <input type="text" name="contactAddress" class="form-control" value= "{{$infos->contactAddress}}" required></input>
            </div>
            <div class="form-group">
                <label>Contact Number</label>
                <input type="text" name="contactNumber" class="form-control" value= "{{$infos->contactNumber}}" required></input>
            </div>
            <div class="form-group">
                <label>Contact Mail</label>
                <input type="text" name="contactEmail" class="form-control" value= "{{$infos->contactEmail}}" required></input>
            </div>
            <div class="form-group">
                <label>About Me Title</label>
                <input type="text" name="aboutTitle" class="form-control" value= "{{$infos->aboutTitle}}" required></input>
            </div>
    
            <div class="form-group">
                <label>About Me</label>
                <textarea id="editor" name="aboutMe" class="form-control" rows="4">{{$infos->aboutMe}}</textarea>
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Update Infos</button>
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
<script>
</script>
@endsection
