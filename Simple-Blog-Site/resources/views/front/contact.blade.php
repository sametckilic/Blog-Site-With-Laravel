@extends('front.layouts.master')
@section('content')
    <!-- Navbar Start -->

    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="container py-3 px-2 bg-primary">
        <div class="row py-5 px-4">
            <div class="col-sm-6 text-center text-md-left">
                <h1 class="mb-3 mb-md-0 text-white text-uppercase font-weight-bold">Contact Me</h1>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->

    <div class="container bg-white pt-5">
        <div class="row px-3 pb-2">
            <div class="col-sm-4 text-center mb-3">
                <i class="fa fa-2x fa-map-marker-alt mb-3 text-primary"></i>
                <h4 class="font-weight-bold">Address</h4>
                <p>{{$infos->contactAddress}}</p>
            </div>
            <div class="col-sm-4 text-center mb-3">
                <i class="fa fa-2x fa-phone-alt mb-3 text-primary"></i>
                <h4 class="font-weight-bold">Phone</h4>
                <p>{{$infos->contactNumber}}</p>
            </div>
            <div class="col-sm-4 text-center mb-3">
                <i class="far fa-2x fa-envelope mb-3 text-primary"></i>
                <h4 class="font-weight-bold">Email</h4>
                <p>{{$infos->contactEmail}}</p>
            </div>
        </div>
        @if(session('success'))
        <div class="alert alert-success">
          {{session('success')}}
        </div>
      @endif
        <form method="post" action="{{ route('contactPost') }}">
            @csrf
            <div class="col-md-12 pb-5">
                <div class="contact-form">
                    <div id="success"></div>

                    <div class="control-group">
                        <input type="text" class="form-control" name="name" placeholder="Your Name"
                            required="required" data-validation-required-message="Please enter your name" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="email" class="form-control" name="email" placeholder="Your Email"
                            required="required" data-validation-required-message="Please enter your email" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" class="form-control" name="subject" placeholder="Subject" required="required"
                            data-validation-required-message="Please enter a subject" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <textarea class="form-control" rows="8" name="message" placeholder="Message" required="required"
                            data-validation-required-message="Please enter your message"></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div>
                        <button class="btn btn-primary" type="submit" id="sendMessageButton">Send Message</button>
                    </div>
        </form>
    </div>
    </div>
    </div>
    </form>
    <!-- Contact End -->


    <!-- Footer Start -->
@endsection
