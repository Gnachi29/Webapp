<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Boss Cuts') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset ('css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset ('css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset ('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/jquery.timepicker.css') }}">

    
    <link rel="stylesheet" href="{{ asset ('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/style.css')}}">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
            <div class="container">
              <a class="navbar-brand" href="welcome">Boss Cuts</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
              </button>
    
              <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item active"><a href="welcome" class="nav-link">Home</a></li>
                  <li class="nav-item"><a href="about" class="nav-link">About</a></li>
                  <li class="nav-item"><a href="services" class="nav-link">Services &amp; Pricing</a></li>
                  <li class="nav-item"><a href="gallery" class="nav-link">Gallery</a></li>
                  <li class="nav-item"><a href="contact" class="nav-link">Contact</a></li>
                </ul>
              </div>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Admin') }}</a>
                            </li>
                            <!--<li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>-->
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    {{ Auth::user()->name }}
                                </a>
                            </li>

                            <li class="nav-item"> 
                                <a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                            </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home') }}">{{ __('Dashboard') }}</a>
                                </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main id="py-4">
            @yield('content')
        </main>
    </div>
</body>
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{ asset ('js/jquery.min.js') }}"></script>
  <script src="{{ asset ('js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset ('js/popper.min.js') }}"></script>
  <script src="{{ asset ('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset ('js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset ('js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset ('js/jquery.stellar.min.js')}}"></script>
  <script src="{{ asset ('js/owl.carousel.min.js')}}"></script>
  <script src="{{ asset ('js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{ asset ('js/aos.js')}}"></script>
  <script src="{{ asset ('js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{ asset ('js/bootstrap-datepicker.js')}}"></script>
  <script src="{{ asset ('js/jquery.timepicker.min.js')}}"></script>
  <script src="{{ asset ('js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset ('js/google-map.js')}}"></script>
  <script src="{{ asset ('js/main.js')}}"></script>
</html>




  	