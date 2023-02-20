@extends('layouts.admin.layout')
@section('content')
        <!-- Main Content -->
  <div id="content">
    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>

        
        <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ auth()->user()->username ?? '' }}</span>
                    <img class="img-profile rounded-circle"
                        src="img/undraw_profile.svg">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Profile
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                        Settings
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                        Activity Log
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a>
                </div>
            </li>

        </ul>
    </nav>
    <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                </div>

                <!-- Content Row -->
                <div class="row">
                    <!-- Content Column -->
                    <div class="col-lg-12 mb-4">
                        {{-- caresoul --}}
                        <div class="container-fluid p-0">
                            <div id="header-carousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    @foreach ($slider as $key => $item)
                                    <div class="carousel-item {{ $key == 0 ? 'active':'' }}">
                                        <img class="w-100" src={{ asset("$item->image") }} alt="Image">
                                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                            <div class="p-3" style="max-width: 900px;">
                                                <h3 class="text-white mb-3 d-none d-sm-block">Best Pet Services</h3>
                                                <h1 class="display-3 text-white mb-3">Keep Your Pet Happy</h1>
                                                <h5 class="text-white mb-3 d-none d-sm-block">Duo nonumy et dolor tempor no et. Diam sit diam sit diam erat</h5>
                                                <a href="" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Book Now</a>
                                                <a href="" class="btn btn-lg btn-secondary mt-3 mt-md-4 px-4">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    {{-- <div class="carousel-item">
                                        <img class="w-100" src={{ asset("style/img/carousel-2.jpg") }} alt="Image">
                                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                            <div class="p-3" style="max-width: 900px;">
                                                <h3 class="text-white mb-3 d-none d-sm-block">Best Pet Services</h3>
                                                <h1 class="display-3 text-white mb-3">Pet Spa & Grooming</h1>
                                                <h5 class="text-white mb-3 d-none d-sm-block">Duo nonumy et dolor tempor no et. Diam sit diam sit diam erat</h5>
                                                <a href="" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Book Now</a>
                                                <a href="" class="btn btn-lg btn-secondary mt-3 mt-md-4 px-4">Learn More</a>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                                <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                                    <div class="btn btn-primary rounded" style="width: 45px; height: 45px;">
                                        <span class="carousel-control-prev-icon mb-n2"></span>
                                    </div>
                                </a>
                                <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                                    <div class="btn btn-primary rounded" style="width: 45px; height: 45px;">
                                        <span class="carousel-control-next-icon mb-n2"></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        {{-- caresoul --}}
                    </div>
                </div>

                <div class="row">
                    <!-- Content Column -->
                    <div class="col-lg-12 mb-4">
                        <div class="container pt-5">
                            <div class="d-flex flex-column text-center mb-5">
                                <h4 class="text-secondary mb-3">Pet Blog</h4>
                                <h1 class="display-4 m-0"><span class="text-primary">Updates</span> From Blog</h1>
                            </div>
                            <div class="row pb-3">
                                @foreach ($blogs as $item)
                                    
                                <div class="col-lg-4 mb-4">
                                    <div class="card border-0 mb-2">
                                        <img class="card-img-top" src={{ asset("$item->image") }} alt="">
                                        <div class="card-body bg-light p-4">
                                            <h4 class="card-title text-truncate">Diam amet eos at no eos</h4>
                                            <div class="d-flex mb-3">
                                                <small class="mr-2"><i class="fa fa-user text-muted"></i> Admin</small>
                                                <small class="mr-2"><i class="fa fa-folder text-muted"></i> Web Design</small>
                                                <small class="mr-2"><i class="fa fa-comments text-muted"></i> 15</small>
                                            </div>
                                            <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est diam eos, rebum sit vero stet justo</p>
                                            <a class="font-weight-bold" href="">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->

<!-- End of Content Wrapper -->
@endsection()