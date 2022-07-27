@extends("front.layouts.master")
@section('content')
<div class="container py-3 px-2 bg-primary">
    <div class="row py-5 px-4">
        <div class="col-sm-6 text-center text-md-left">
             <h1 class="mb-3 mb-md-0 text-white font-weight-bold">{{$category}} kategorisine ait yazilar</h1>
        </div>
    </div>
</div>
<div class="container bg-white pt-5">
 @foreach($veri as $datas)
    <div class="row blog-item px-3 pb-5">
        <div class="col-md-5">
            <img class="img-fluid " src={{$datas->photo}} alt="Image">
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

@endsection