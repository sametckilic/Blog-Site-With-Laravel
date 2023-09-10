@extends("front.layouts.master")
@section('content')
    

            <!-- Navbar Start -->
            
            <!-- Navbar End -->

            <!-- Page Header Start -->
            <div class="container py-3 px-2 bg-primary">
                <div class="row py-5 px-4">
                    <div class="col-sm-6 text-center text-md-left">
                        <h1 class="mb-3 mb-md-0 text-white text-uppercase font-weight-bold">About Me</h1>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            <!-- About Start -->
            <div class="container bg-white pt-5">
                <div class="row px-3 pb-5">
                    <div class="col-md-12">
                        <h2 class="mb-4 font-weight-bold">{{$infos->aboutTitle}}</h2>
                        <p class="m-0">
                            {{$infos->aboutMe}}                        </p>
                    </div>
                </div>
            </div>
            <!-- About End -->

            @endsection