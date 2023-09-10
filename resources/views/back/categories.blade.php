@extends('back.layouts.master')
@section('title','Categories')
@section('content')
<div class="card shadow mb-4">
  <div class="card-header py-3">
  </div>
  <div class="card-body">
      @if (session('success'))
          <div class="alert alert-success">
              {{ session('success') }}
          </div>
      @endif
      <form method = "GET" action="">
      <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                  <tr>
                    <th>Category ID</th> 
                    <th>Name</th>
                      <th>Process</th>
                     
                  </tr>
              </thead>
              <tbody>
                  @foreach ($categories as $category)
                      <tr>
                        <td>{{$category->id}}</td> 
                        <td>{{ $category->name }}</td>
  
                          <td>
                            <a href="{{ route('deletecategories', $category->name )}}" title="Delete" 
                              class="btn btn-sm btn-danger"><i class="fa fa-times"></i> </a> 
                          </td>
                      </tr>
                  @endforeach
              </tbody>
          </table>
        </form>
        <form method="post" action="{{route("storecategories")}}" enctype="multipart/form-data">
          @csrf
            <div class="form-group">
                <label>Category Name</label>
                <input type="text" name="name" class="form-control" required></input>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Create Category</button>
            </div>
        </form>
      </div>
  </div>
@endsection