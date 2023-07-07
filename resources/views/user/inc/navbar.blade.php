<div class="p-0 container-xxl position-relative">
    <nav class="px-4 py-3 navbar navbar-expand-lg navbar-dark bg-dark px-lg-5 py-lg-0">
        <a href="{{ route('home') }}" class="p-0 navbar-brand">
            <h1 class="m-0 text-primary"><i class="fa fa-utensils me-3"></i>Restoran</h1>
            <!-- <img src="{{ asset('user/img') }}/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="py-0 navbar-nav ms-auto pe-4">
                <a href="{{ route('home') }}" class="nav-item nav-link ">Home</a>
                <a href="{{ route('about') }}" class="nav-item nav-link">About</a>

                <a href="{{ route('menu') }}" class="nav-item nav-link">Menu</a>

                <a href="{{ route('reservation') }}" class="nav-item nav-link">Reservation</a>
            </div>

                @if (Route::has('login'))
    <div class="z-10 p-6 text-right sm:fixed sm:top-0 sm:right-0">
        @auth
            <a href="{{ route('logout') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log out</a>
        @else
            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
                {{ ('/') }}
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
            @endif
        @endauth
    </div>
@endif

        </div>
    </nav>


</div>