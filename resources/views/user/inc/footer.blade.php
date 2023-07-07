<div class="pt-5 mt-5 container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="mb-4 section-title ff-secondary text-start text-primary fw-normal">Company</h4>
                <a class="btn btn-link" href="{{ route('about') }}">About Us</a>
                <a class="btn btn-link" href="{{ route('menu') }}">Menu</a>
                <a class="btn btn-link" href="{{ route('reservation') }}">Reservation</a>
                <a class="btn btn-link" href="">Privacy Policy</a>
                <a class="btn btn-link" href="">Terms & Condition</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="mb-4 section-title ff-secondary text-start text-primary fw-normal">Contact</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                <div class="pt-2 d-flex">
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="mb-4 section-title ff-secondary text-start text-primary fw-normal">Opening</h4>
                <h5 class="text-light fw-normal">Monday - Saturday</h5>
                <p>09AM - 09PM</p>
                <h5 class="text-light fw-normal">Sunday</h5>
                <p>10AM - 08PM</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="mb-4 section-title ff-secondary text-start text-primary fw-normal">Newsletter
                </h4>
                <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                <div class="mx-auto position-relative" style="max-width: 400px;">
                    <input class="py-3 form-control border-primary w-100 ps-4 pe-5" type="text"
                        placeholder="Your email">
                    <button type="button"
                        class="top-0 py-2 mt-2 btn btn-primary position-absolute end-0 me-2">SignUp</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="mb-3 text-center col-md-6 text-md-start mb-md-0">
                    &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.

                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a><br><br>
                    Distributed By <a class="border-bottom" href="https://themewagon.com"
                        target="_blank">ThemeWagon</a>
                </div>
                <div class="text-center col-md-6 text-md-end">
                    <div class="footer-menu">
                        <a href="">Home</a>
                        <a href="">Cookies</a>
                        <a href="">Help</a>
                        <a href="">FQAs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="{{ route('home') }}" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('user/lib') }}/wow/wow.min.js"></script>
<script src="{{ asset('user/lib') }}/easing/easing.min.js"></script>
<script src="{{ asset('user/lib') }}/waypoints/waypoints.min.js"></script>
<script src="{{ asset('user/lib') }}/counterup/counterup.min.js"></script>
<script src="{{ asset('user/lib') }}/owlcarousel/owl.carousel.min.js"></script>
<script src="{{ asset('user/lib') }}/tempusdominus/js/moment.min.js"></script>
<script src="{{ asset('user/lib') }}/tempusdominus/js/moment-timezone.min.js"></script>
<script src="{{ asset('user/lib') }}/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Template Javascript -->
<script src="{{ asset('user/js') }}/main.js"></script>
</body>

</html>