@extends('user.layouts.homeLayout')

@section('body')
<div class="py-5 mb-5 container-xxl bg-dark hero-header">
    <div class="container py-5 my-5">
        <div class="row align-items-center g-5">
            <div class="text-center col-lg-6 text-lg-start">
                <h1 class="text-white display-3 animated slideInLeft">Enjoy Our<br>Delicious Meal</h1>
                <p class="pb-2 mb-4 text-white animated slideInLeft">Tempor erat elitr rebum at clita.
                    Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et
                    sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                <a href="{{ route('reservation') }}" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Book A
                    Table</a>
            </div>
            <div class="overflow-hidden text-center col-lg-6 text-lg-end">
                <img class="img-fluid" src="{{ asset('user/img') }}/hero.png" alt="">
            </div>
        </div>
    </div>
</div>
            <!-- Service Start -->
            <div class="py-5 container-xxl">
                <div class="container">
                    <div class="row g-4">
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="pt-3 rounded service-item">
                                <div class="p-4">
                                    <i class="mb-4 fa fa-3x fa-user-tie text-primary"></i>
                                    <h5>Master Chefs</h5>
                                    <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="pt-3 rounded service-item">
                                <div class="p-4">
                                    <i class="mb-4 fa fa-3x fa-utensils text-primary"></i>
                                    <h5>Quality Food</h5>
                                    <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="pt-3 rounded service-item">
                                <div class="p-4">
                                    <i class="mb-4 fa fa-3x fa-cart-plus text-primary"></i>
                                    <h5>Online Order</h5>
                                    <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="pt-3 rounded service-item">
                                <div class="p-4">
                                    <i class="mb-4 fa fa-3x fa-headset text-primary"></i>
                                    <h5>24/7 Service</h5>
                                    <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Service End -->

            <!-- Team Start -->
            <div class="pt-5 pb-3 container-xxl">
                <div class="container">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h5 class="text-center section-title ff-secondary text-primary fw-normal">Team Members</h5>
                        <h1 class="mb-5">Our Master Chefs</h1>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="overflow-hidden text-center rounded team-item">
                                <div class="m-4 overflow-hidden rounded-circle">
                                    <img class="img-fluid" src="{{ asset('user/img') }}/team-1.jpg" alt="">
                                </div>
                                <h5 class="mb-0">Full Name</h5>
                                <small>Designation</small>
                                <div class="mt-3 d-flex justify-content-center">
                                    <a class="mx-1 btn btn-square btn-primary" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="mx-1 btn btn-square btn-primary" href=""><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="mx-1 btn btn-square btn-primary" href=""><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="overflow-hidden text-center rounded team-item">
                                <div class="m-4 overflow-hidden rounded-circle">
                                    <img class="img-fluid" src="{{ asset('user/img') }}/team-2.jpg" alt="">
                                </div>
                                <h5 class="mb-0">Full Name</h5>
                                <small>Designation</small>
                                <div class="mt-3 d-flex justify-content-center">
                                    <a class="mx-1 btn btn-square btn-primary" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="mx-1 btn btn-square btn-primary" href=""><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="mx-1 btn btn-square btn-primary" href=""><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="overflow-hidden text-center rounded team-item">
                                <div class="m-4 overflow-hidden rounded-circle">
                                    <img class="img-fluid" src="{{ asset('user/img') }}/team-3.jpg" alt="">
                                </div>
                                <h5 class="mb-0">Full Name</h5>
                                <small>Designation</small>
                                <div class="mt-3 d-flex justify-content-center">
                                    <a class="mx-1 btn btn-square btn-primary" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="mx-1 btn btn-square btn-primary" href=""><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="mx-1 btn btn-square btn-primary" href=""><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="overflow-hidden text-center rounded team-item">
                                <div class="m-4 overflow-hidden rounded-circle">
                                    <img class="img-fluid" src="{{ asset('user/img') }}/team-4.jpg" alt="">
                                </div>
                                <h5 class="mb-0">Full Name</h5>
                                <small>Designation</small>
                                <div class="mt-3 d-flex justify-content-center">
                                    <a class="mx-1 btn btn-square btn-primary" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="mx-1 btn btn-square btn-primary" href=""><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="mx-1 btn btn-square btn-primary" href=""><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Team End -->


            <!-- Testimonial Start -->
            <div class="py-5 container-xxl wow fadeInUp" data-wow-delay="0.1s">
                <div class="container">
                    <div class="text-center">
                        <h5 class="text-center section-title ff-secondary text-primary fw-normal">Testimonial</h5>
                        <h1 class="mb-5">Our Clients Say!!!</h1>
                    </div>
                    <div class="owl-carousel testimonial-carousel">
                        <div class="p-4 bg-transparent border rounded testimonial-item">
                            <i class="mb-3 fa fa-quote-left fa-2x text-primary"></i>
                            <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos
                                labore diam</p>
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('user/img') }}/testimonial-1.jpg"
                                    style="width: 50px; height: 50px;">
                                <div class="ps-3">
                                    <h5 class="mb-1">Client Name</h5>
                                    <small>Profession</small>
                                </div>
                            </div>
                        </div>
                        <div class="p-4 bg-transparent border rounded testimonial-item">
                            <i class="mb-3 fa fa-quote-left fa-2x text-primary"></i>
                            <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos
                                labore diam</p>
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('user/img') }}/testimonial-2.jpg"
                                    style="width: 50px; height: 50px;">
                                <div class="ps-3">
                                    <h5 class="mb-1">Client Name</h5>
                                    <small>Profession</small>
                                </div>
                            </div>
                        </div>
                        <div class="p-4 bg-transparent border rounded testimonial-item">
                            <i class="mb-3 fa fa-quote-left fa-2x text-primary"></i>
                            <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos
                                labore diam</p>
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('user/img') }}/testimonial-3.jpg"
                                    style="width: 50px; height: 50px;">
                                <div class="ps-3">
                                    <h5 class="mb-1">Client Name</h5>
                                    <small>Profession</small>
                                </div>
                            </div>
                        </div>
                        <div class="p-4 bg-transparent border rounded testimonial-item">
                            <i class="mb-3 fa fa-quote-left fa-2x text-primary"></i>
                            <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos
                                labore diam</p>
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded-circle" src="{{ asset('user/img') }}/testimonial-4.jpg"
                                    style="width: 50px; height: 50px;">
                                <div class="ps-3">
                                    <h5 class="mb-1">Client Name</h5>
                                    <small>Profession</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial End -->
@endsection