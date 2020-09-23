<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/vendor.js') }}"></script>
    <script src="{{ asset('js/jk.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/jk.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css.css') }}" rel="stylesheet">
    <link href="{{ asset('css/vendor.css') }}" rel="stylesheet">

    <style>
        .header {
            border-bottom: none;
        }
    </style>

</head>

<body>
    <!-- header -->
    <header class="header-sticky header-light" style="border-bottom:none;">
        <div class="containe pl-1 pr-1">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="{{url('/')}}">
                    <a class="navbar-logo navbar-logo-light" href="{{url('/')}}" alt="Logo"> <kbd>UID - Identification system</kbd> </a>
                    <!-- <a class="navbar-logo navbar-logo-dark" href="{{url('/')}}" alt="Logo"> ID - Identification system </a> -->
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="burger"><span></span></span></button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav align-items-center mr-auto text-center  ">
                        <li class="nav-item">
                            <a class="nav-link a-light" href="{{url('/about')}}" role="button" style="color:white">
                                About Us
                            </a>
                        </li>


                    </ul>

                    <ul class="navbar-nav align-items-center mr-0">
                        <li class="nav-item dropdow">
                            @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}" style="color:white">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}" style="color:white">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-linkk dropdown-toggle btn btn-outline-primary" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color:white">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                        <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="../app/profile.html">Public Profile</a>
                  <a class="dropdown-item" href="../app/connections.html">Connections</a>
                  <a class="dropdown-item" href="../app/groups.html">Groups</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="../app/settings.html">Settings</a>
                  <a class="dropdown-item" href="../app/payments.html">Payments</a>
                </div> -->
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
<section class="p-0">
      <div class="swiper-container swiper-container-half text-white"
        data-top-top="transform: translateY(0px);" 
        data-top-bottom="transform: translateY(250px);">
        <div class="swiper-wrapper">
          <div class="swiper-slide vh-100">
            <div class="image image-overlay" style="background-image:url('/img/cover.jpeg')"></div>
            <div class="caption">
              <div class="container">
                <div class="row justify-content-center vh-100">
                  <div class="col-md-8 align-self-center text-center">
                  <form method="POST" action="{{ route('search') }}">
              @csrf

              <div class="input-group mb-3">

                <input type="text" name="search_value" class="form-control shado" id="typed4" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">

                  <!-- <button class="btn" type="submit"><a href="" class="icon-search fs-20 text-dark"></a>d </button> -->
                  <button class="btn " type="submit"> <i class="icon-search fs-20 text-dark"></i> </button>
                </div>
              </div>
            </form>
                    <h1 data-swiper-parallax="-100%" class="displa">An <b>Unique Identity</b> that keeps you safe.</h1>
                    <a href="{{url('register')}}" class="btn btn-white px-5">Get Started</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col text-center">
                  <div class="mouse"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- / cover -->




  