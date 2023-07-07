@extends('user.layouts.homeLayout')


@section('body')
<div class="py-5 mb-5 container-xxl bg-dark hero-header">
    <div class="container py-5 my-5">
        <div class="row align-items-center g-5">
            <div class="text-center ">
                <h1 class="text-white display-3 animated slideInLeft">About Our Restaurant</h1>
            </div>
        </div>
    </div>
</div>
<!-- About Start -->
<div class="py-5 container-xxl">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6 text-start">
                        <img class="rounded img-fluid w-100 wow zoomIn" data-wow-delay="0.1s"
                            src="{{ asset('user/img') }}/about-1.jpg">
                    </div>
                    <div class="col-6 text-start">
                        <img class="rounded img-fluid w-75 wow zoomIn" data-wow-delay="0.3s"
                            src="{{ asset('user/img') }}/about-2.jpg" style="margin-top: 25%;">
                    </div>
                    <div class="col-6 text-end">
                        <img class="rounded img-fluid w-75 wow zoomIn" data-wow-delay="0.5s"
                            src="{{ asset('user/img') }}/about-3.jpg">
                    </div>
                    <div class="col-6 text-end">
                        <img class="rounded img-fluid w-100 wow zoomIn" data-wow-delay="0.7s"
                            src="{{ asset('user/img') }}/about-4.jpg">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
                <h1 class="mb-4">Welcome to <i class="fa fa-utensils text-primary me-2"></i>Restoran</h1>
                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet
                    diam et eos erat ipsum et lorem et sit, sed stet lorem sit.</p>
                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet
                    diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna
                    dolore erat amet</p>
                <div class="mb-4 row g-4">
                    <div class="col-sm-6">
                        <div class="px-3 d-flex align-items-center border-start border-5 border-primary">
                            <h1 class="flex-shrink-0 mb-0 display-5 text-primary" data-toggle="counter-up">
                                15</h1>
                            <div class="ps-4">
                                <p class="mb-0">Years of</p>
                                <h6 class="mb-0 text-uppercase">Experience</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="px-3 d-flex align-items-center border-start border-5 border-primary">
                            <h1 class="flex-shrink-0 mb-0 display-5 text-primary" data-toggle="counter-up">
                                50</h1>
                            <div class="ps-4">
                                <p class="mb-0">Popular</p>
                                <h6 class="mb-0 text-uppercase">Master Chefs</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="px-5 py-3 mt-2 btn btn-primary" href="">Read More</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


@endsection