@extends('user.layouts.homeLayout')

@section('body')
<div class="py-5 mb-5 container-xxl bg-dark hero-header">
    <div class="container py-5 my-5">
        <div class="row align-items-center">
            <div class="text-center ">
                <h1 class="text-white display-3 animated slideInLeft">book a table for any occasion</h1>

            </div>

        </div>
    </div>
</div>
            <!-- Reservation Start -->
            <div class="px-0 py-5 container-xxl wow fadeInUp" data-wow-delay="0.1s">
                <div class="row g-0">
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-6 bg-dark d-flex align-items-center">
                        <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                            <h5 class="section-title ff-secondary text-start text-primary fw-normal">Reservation</h5>
                            <h1 class="mb-4 text-white">Book A Table Online</h1>
                            <form action="{{ route('store_reservation') }}" method="POST">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" name="email" id="email"
                                                placeholder="Your Email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone">
                                            <label for="name">Your Phone</label>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-floating date"  id="date3" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" name="date" id="datetime"
                                                placeholder="Date & Time" data-target="#date3"
                                                data-toggle="datetimepicker" />
                                            <label for="datetime">Date & Time</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" name="count" required min="1">
                                            <label for="select1">No Of People</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" name="message" placeholder="Special Request" id="message"
                                                style="height: 100px"></textarea>
                                            <label for="message">Special Request</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="py-3 btn btn-primary w-100" type="submit">Book Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Reservation Start -->
@endsection