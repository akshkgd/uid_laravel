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
        .a-light {
            color: white;
        }
    </style>

</head>

<body>
    <!-- header -->
    <header class="header-sticky header-light">
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
                            <a class="nav-link a-light" href="{{url('/about')}}" role="button">
                                About Us
                            </a>
                        </li>


                    </ul>

                    <ul class="navbar-nav align-items-center mr-0">
                        <li class="nav-item dropdow">
                            @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-linkk dropdown-toggle btn btn-outline-primary" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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



    @yield('content')


    </div>
</body>

</html>