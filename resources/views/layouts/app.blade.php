<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Rollover Process') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('css/colors/blue.css')}}" id="theme" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-wysihtml5.css') }}" rel="stylesheet">
    @yield('header-styles')
</head>
<body class="fix-header card-no-border logo-left">
    <!-- ============================================================== -->
    <!-- Preloader - style defined in spinners.css                      -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <div id="app">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ url('images/logo/gray.png') }}" alt="homepage" class="dark-logo" />
                        {{ config('app.name', 'Employee Relations') }}
                    </a>
                </div>
                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <li class="nav-item hidden-sm-down">
                            <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="/rollover">Rollover</a>
                        </li>

                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user('name') }} <span class="caret"></span>
                            </a>
                        </li>
                    </ul>

                </div>
            </nav>
        </header>


        <div class="page-wrapper">
            <div class="container-fluid w-75 p-3">
                <main class="py-4">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
</body>
    <!-- Scripts -->
    <script src="{{asset('js/vendor.js')}}"></script>
    <script src="{{asset('js/manifest.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/local.js')}}"></script>
    <script src="{{asset('js/bootstrap-wysihtml5.js')}}"></script>
    @yield('footer-scripts')
</html>
