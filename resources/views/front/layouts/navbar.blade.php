<div class="container p-0">
    <nav class="navbar navbar-expand-lg bg-secondary navbar-dark">
        <a href="" class="navbar-brand d-block d-lg-none">Navigation</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarCollapse">
            <div class="navbar-nav m-auto justify-content-between">
                <a href="{{route("index")}}" class="nav-item nav-link">Home</a>
                <a href="{{route("aboutMe")}}" class="nav-item nav-link">About</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Categories</a>
                    <div class="dropdown-menu">
                        @foreach($kategori as $datas)    
                        
                        <a href={{route("categorypost",$datas->name)}} class="dropdown-item">{{$datas->name}}</a> 
                
                    @endforeach
                    </div>
                </div>
                <a href="{{route("contact")}}" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </nav>
</div>