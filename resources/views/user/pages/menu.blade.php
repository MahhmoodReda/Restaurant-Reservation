@extends('user.layouts.homeLayout')

@section('body')
<div class="py-5 mb-5 container-xxl bg-dark hero-header">
    <div class="container py-5 my-5">
        <div class="row align-items-center ">
            <div class="text-center ">
                <h1 class="text-white display-3 animated slideInLeft">Enjoy Our Delicious Meals</h1>
                <a href="{{ route('reservation') }}" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Book A
                    Table</a>
            </div>
        </div>
    </div>
</div>
            <!-- Menu Start -->
            <div class="py-5 container-xxl">
                <div class="container">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h5 class="text-center section-title ff-secondary text-primary fw-normal">Food Menu</h5>

                    </div>
                    <div class="text-center tab-class wow fadeInUp" data-wow-delay="0.1s">
                        <ul class="mb-5 nav nav-pills d-inline-flex justify-content-center border-bottom">
                            <li class="nav-item">
                                <a class="pb-3 mx-3 d-flex align-items-center text-start ms-0 active"
                                    data-bs-toggle="pill" href="#tab-1">
                                    <i class="fa fa-coffee fa-2x text-primary"></i>
                                    <div class="ps-3">
                                        <small class="text-body">Popular</small>
                                        <h6 class="mb-0 mt-n1">Breakfast</h6>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="pb-3 mx-3 d-flex align-items-center text-start" data-bs-toggle="pill"
                                    href="#tab-2">
                                    <i class="fa fa-hamburger fa-2x text-primary"></i>
                                    <div class="ps-3">
                                        <small class="text-body">Special</small>
                                        <h6 class="mb-0 mt-n1">Launch</h6>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="pb-3 mx-3 d-flex align-items-center text-start me-0" data-bs-toggle="pill"
                                    href="#tab-3">
                                    <i class="fa fa-utensils fa-2x text-primary"></i>
                                    <div class="ps-3">
                                        <small class="text-body">Lovely</small>
                                        <h6 class="mb-0 mt-n1">Dinner</h6>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab-1" class="p-0 tab-pane fade show active">
                                <div class="row g-4">
                                    @foreach ($breakfast3 as $breakfast)

                                    <div class="col-lg-6">
                                        <div class="d-flex align-items-center">
                                            <img class="flex-shrink-0 rounded img-fluid" src="{{ asset("storage/$breakfast->image") }}" alt=""
                                            style="width: 80px;">
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <h5 class="pb-2 d-flex justify-content-between border-bottom">
                                                    <span>{{ $breakfast->title }}</span>
                                                    <span class="text-primary">${{ $breakfast->price }}</span>
                                                </h5>
                                                <small class="fst-italic">{{ $breakfast->desc }}</small>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                            </div>
                            <div id="tab-2" class="p-0 tab-pane fade show">
                                <div class="row g-4">
                                    @foreach ($lunch1 as $lunch )

                                    <div class="col-lg-6">
                                        <div class="d-flex align-items-center">
                                            <img class="flex-shrink-0 rounded img-fluid" src="{{ asset("storage/$lunch->image") }}"
                                            style="width: 80px;">
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <h5 class="pb-2 d-flex justify-content-between border-bottom">
                                                    <span>{{ $lunch->title }}</span>
                                                    <span class="text-primary">${{ $lunch->price }}</span>
                                                </h5>
                                                <small class="fst-italic">{{ $lunch->desc }}</small>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                </div>
                            </div>
                            <div id="tab-3" class="p-0 tab-pane fade show">
                                <div class="row g-4">
                                    @foreach ($dinner2 as $dinner)

                                    <div class="col-lg-6">
                                        <div class="d-flex align-items-center">
                                            <img class="flex-shrink-0 rounded img-fluid" src="{{ asset("storage/$dinner->image") }}" alt=""
                                                style="width: 80px;">
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <h5 class="pb-2 d-flex justify-content-between border-bottom">
                                                    <span>{{ $dinner->title }}</span>
                                                    <span class="text-primary">${{ $dinner->price }}</span>
                                                </h5>
                                                <small class="fst-italic">{{ $dinner->desc }}</small>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Menu End -->
@endsection