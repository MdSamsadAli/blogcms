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


                <a class="btn btn-primary mb-2" href="{{ route('admin.slider.index') }}">
                    Back
                </a>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Update Slider</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <form action="{{ route('admin.slider.update', $slider->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                  <label class="form-label">Title</label>
                                  <input type="text" class="form-control" name="title" value="{{ $slider->title }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea name="description" class="form-control" rows="3">{{ $slider->descripition }}</textarea>
                                  </div>
                                  <div class="mb-3">
                                    <label class="form-label">Image</label>
                                    <input type="file" class="form-control" name="image" value="{{ $slider->image }}"/>
                                    <img src="{{ asset("$slider->image") }}" alt="" height="100" width="100">
                                  </div>
                                  <div class="mb-3">
                                    <label class="form-label">Status</label>
                                    <input type="checkbox" name="status" {{ $slider->status == '1' ? 'checked':'' }} style="width: 30px; hieght:30px;" />
                                    Checked=Hidden, UnChecked=Visible

                                  </div>
                                <button type="submit" class="btn btn-primary">Upadte</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->


        </div>
        <!-- End of Main Content -->

<!-- End of Content Wrapper -->
@endsection()