<body>
    <div class="wrapper">
        <div class="sidebar">
            <div class="sidebar-text d-flex flex-column h-100 justify-content-center text-center">
                <img class="mx-auto d-block w-75 bg-primary img-fluid rounded-circle mb-4 p-3" width="100px" src={{$infos->sidebarPhoto}} alt="Image">
                <h1 class="font-weight-bold">{{$infos->sidebarName}}</h1>
                <p class="mb-4">
                    {{$infos->sidebarAbstract}}
                </p>
                <div class="d-flex justify-content-center mb-5">
                    <a class="btn btn-outline-primary mr-2" href="{{$infos->sidebarTwitter}}" target = "_blank"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary mr-2" href="{{$infos->sidebarFacebook}}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary mr-2" href="{{$infos->sidebarLinkedin}}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-primary mr-2" href="{{$infos->sidebarInstagram}}" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="sidebar-icon d-flex flex-column h-100 justify-content-center text-right">
                <i class="fas fa-2x fa-angle-double-right text-primary"></i>
            </div>
        </div>
        <div class="content">