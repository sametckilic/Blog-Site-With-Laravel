<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin')}}">
                <div class="sidebar-brand-text ">Blog Site Admin Panel </div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item @if(Request::segment(2)=="panel") active @endif ">
                <a class="nav-link" href="{{route('admin')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Panel</span></a>
            </li>

            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link  @if(Request::segment(2)=="posts") in @else collapsed @endif"  href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-edit"></i>
                    <span>Posts</span>
                </a>
                <div id="collapseTwo" class="collapse @if(Request::segment(2)=="posts") show @endif " aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Post Processes</h6>
                        <a class="collapse-item @if(Request::segment(2)=="posts" and !Request::segment(3)) active @endif " href="{{route("showarticles")}}">All Posts</a>
                        <a class="collapse-item @if(Request::segment(2)=="posts" and Request::segment(3)=="create") active @endif " href="{{route("createarticle")}}">Create Post</a>
                        <a class="collapse-item @if(Request::segment(2)=="posts" and Request::segment(3)=="categories") active @endif " href="{{route("categories")}}">Categories</a>

                    </div>
                </div>
            </li>
            <li class="nav-item @if(Request::segment(2)=="contacts") active @endif ">
                <a class="nav-link" href="{{route('contacts')}}">
                    <i class="fas fa-address-book"></i>
                    <span>Contacts</span></a>
            </li>
            <li class="nav-item @if(Request::segment(2)=="infos") active @endif ">
                <a class="nav-link" href="{{route('infos')}}">
                    <i class="fas fa-bars"></i>
                    <span>Infos</span></a>
            </li>


            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::user()->username}}</span>
                                <i class="fa fa-user" aria-hidden="true"></i>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">@yield('title')</h1>
                        <a href="{{route("index")}}" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-globe fa-sm text-white-50"></i>Show Site</a>
                    </div>

                    <!-- Content Row -->
