@include('user.inc.header')
    <body>
        <div class="p-0 bg-white container-xxl">
            <!-- Spinner Start -->

            <!-- Spinner End -->


            <!-- Navbar & Hero Start -->
@include('user.inc.navbar')
            <!-- Navbar & Hero End -->


@yield('body')


            <!-- Footer Start -->
    @include('user.inc.footer')