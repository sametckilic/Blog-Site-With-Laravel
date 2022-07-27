@extends("front.layouts.master")
@section('content')

                <!-- Navbar Start -->
                
                <!-- Navbar End -->
                
                <!-- Carousel Start -->
                <div class="container p-0">
                    <div id="blog-carousel" class="carousel slide" data-ride="carousel" >
                        <div class="carousel-inner" >
                            <div class="carousel-item active">
                                <img class="" src="https://api.time.com/wp-content/uploads/2022/07/NASA-james-webb-telescope-07.jpg" alt="Image" height = 500px >
                                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                    <h2 class="mb-3 text-white font-weight-bold">Welcome to My Blog Site</h2>
                                    <a href="{{route("aboutMe")}}" class="btn btn-lg btn-outline-light mt-4">About Me</a>
                                </div>
                            </div>
                        @foreach($carouselveri as $datas) 
                       <div class="carousel-item">
                                <img class="w-100" src={{ asset("images/".$datas->photo) }} alt="Image" height = 500px >
                                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                    <h2 class="text-white font-weight-bold">{{$datas->title}}</h2>
                                    <h5 class="text-white font-weight" style="margin-left: 100px; margin-right:100px">@php echo substr($datas->article,0,100)."..." @endphp</h5>
                                    <div class="d-flex">
                                        <small class="mr-2"><i class="fa fa-calendar-alt"></i>@php $timestamp = strtotime($datas->created_at); echo "  ".date('d/m/y h:i',$timestamp);@endphp</small>
                                        <small class="mr-2"><i class="fas fa-stream"></i>  {{$datas->category}}</small>
                                    </div>
                                    <a href={{route("single",$datas->id)}} class="btn btn-lg btn-outline-light mt-4">Read More</a>
                                </div>
                            </div>
                        @endforeach
                            <!-- 
                         -->
                        <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#blog-carousel" data-slide="next" >
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>
                <!-- Carousel End -->
                
                
                <!-- Blog List Start -->
                <div class="container bg-white pt-5">
                    @foreach($veri as $datas)
                    <div class="row blog-item px-3 pb-5">
                        <div class="col-md-5">
                            <img class="img-fluid " src={{ asset("images/".$datas->photo) }} alt="Image">
                        </div>
                        <div class="col-md-7">
                            <h3 class="mt-md-4 px-md-3 mb-2 py-2 bg-white font-weight-bold">{{$datas->title}}</h3>
                            <div class="d-flex mb-3">
                                <small class="mr-2 text-muted"><i class="fa fa-calendar-alt"></i> @php $timestamp = strtotime($datas->created_at); echo "  ".date('d/m/y h:i',$timestamp);@endphp</small>
                                <small class="mr-2 text-muted"><i class="fas fa-stream"></i> {{$datas->category}}</small>
                            </div>
                            <p>
                                @php echo substr($datas->article,0,100)@endphp<a href={{route("single",$datas->id)}}>...</a>
                            </p>
                            <a class="btn btn-link p-0" href={{route("single",$datas->id)}}>Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                        
                    </div>
                    @endforeach
                </div>
                <!-- Blog List End -->
                
                
               
                <!-- Footer Start -->
             
            @endsection