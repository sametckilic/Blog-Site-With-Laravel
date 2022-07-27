@extends('front.layouts.master')
@section('content')
    <div class="container py-5 px-2 bg-white">
        <div class="row px-4">
            <div class="col-12">
                
                <div class="card">
                  
                    <img src="{{ asset("images/".$veri->photo) }}" class="card-img" alt="...">
                    <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center">
                      <h2 class="text-white font-weight-bold ">{{$veri->title}}</h2>
                    </div>
                </div>
                    <br>
                
                    <br>
                    <p class="mb-3 font d-flex justify-content-center">{{ $veri->article }}</p>
                    <br>
                    @foreach ($photos as $photo)
                        <img src="{{asset("images".'/'.$photo->photo)}}" width="300" alt="">
                    @endforeach
                    <div class="d-flex d-flex justify-content-center">
                        <p class="mr-3 text-muted"><i class="fa fa-calendar-alt "></i> @php
                            $timestamp = strtotime($veri->created_at);
                            echo '  ' . date('d/m/y h:i', $timestamp);
                        @endphp</p>
                        <p class="mr-3 text-muted"><i class="fas fa-stream"></i> {{ $veri->category }}</p>
                    </div>
               

            </div>

        </div>
        <div class="col-12 py-4">
            <h3 class="mb-4 font-weight-bold">{{$comments->count()}} comments found.</h3>
            @foreach($comments as $comment)
            
            <div class="media mb-4">
                <div class="media-body">
                    <h4>{{$comment->name}}<small><i> @php
                        $timestamp = strtotime($comment->created_at);
                        echo '  ' . date('d/m/y h:i', $timestamp);
                    @endphp</i></small></h4>
                    <p>{{$comment->message}}</p>
                </div>
            </div>
            @endforeach
        </div>
        <div class="col-12">
            <h3 class="mb-4 font-weight-bold">Leave a comment</h3>
            <form method = "post" action= "{{route("storecomment",$veri->id)}}">
                @csrf
                <div class="form-group">
                    <label for="name">Name *</label>
                    <input name = "name" type="text" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <label for="email">Email *</label>
                    <input name = "email"type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="message">Message *</label>
                    <textarea name = "message" id="message" cols="30" rows="5" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" value="Leave Comment" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
@endsection
