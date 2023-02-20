@extends('layouts.user.layout')
@section('content')
<!-- Carousel Start -->
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
<!-- Carousel End -->



<!-- Team Start -->
<div class="container-fluid bg-light pt-5 pb-4 py-5">
    <div class="d-flex flex-column text-center mb-5">
        <h4 class="text-secondary mb-3">Team Member</h4>
        <h1 class="display-4 m-0">Meet Our <span class="text-primary">Team Member</span></h1>
    </div>
    <div class="owl-carousel testimonial-carousel">
        <div class="bg-white mx-3 p-4">
            <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
                <img class="img-fluid" src={{ asset("style/img/testimonial-1.jpg") }} style="width: 80px; height: 80px;" alt="">
                <div class="ml-3">
                    <h5>Client Name</h5>
                    <i>Profession</i>
                </div>
            </div>
            <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor tempor ipsum sanct clita</p>
        </div>
        <div class="bg-white mx-3 p-4">
            <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
                <img class="img-fluid" src="img/testimonial-2.jpg" style="width: 80px; height: 80px;" alt="">
                <div class="ml-3">
                    <h5>Client Name</h5>
                    <i>Profession</i>
                </div>
            </div>
            <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor tempor ipsum sanct clita</p>
        </div>
        <div class="bg-white mx-3 p-4">
            <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
                <img class="img-fluid" src="img/testimonial-3.jpg" style="width: 80px; height: 80px;" alt="">
                <div class="ml-3">
                    <h5>Client Name</h5>
                    <i>Profession</i>
                </div>
            </div>
            <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor tempor ipsum sanct clita</p>
        </div>
        <div class="bg-white mx-3 p-4">
            <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
                <img class="img-fluid" src="img/testimonial-4.jpg" style="width: 80px; height: 80px;" alt="">
                <div class="ml-3">
                    <h5>Client Name</h5>
                    <i>Profession</i>
                </div>
            </div>
            <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor tempor ipsum sanct clita</p>
        </div>
    </div>
</div>
<!-- Team End -->

<!-- Blog Start -->
<div class="container pt-5">
    <div class="d-flex flex-column text-center mb-5">
        <h4 class="text-secondary mb-3">Pet Blog</h4>
        <h1 class="display-4 m-0">Pet Lovers Blog</h1>
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
<!-- Blog End -->
@endsection