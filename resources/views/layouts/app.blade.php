<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-violet-900 navbar-laravel">
            <div class="container">

                <a class="navbar-brand text-white" href="{{ url('/') }}">
                    <div class="d-flex">
                        <h3>HEALTHY</h3>
                        <h3 class="text-cyan-400">KIT</h3>
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="d-flex align-items-center">
                            <li class="nav-item mr-3">
                                <span>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10 2C6.68632 2 4.00003 4.68629 4.00003 8V11.5858L3.29292 12.2929C3.00692 12.5789 2.92137 13.009 3.07615 13.3827C3.23093 13.7564 3.59557 14 4.00003 14H16C16.4045 14 16.7691 13.7564 16.9239 13.3827C17.0787 13.009 16.9931 12.5789 16.7071 12.2929L16 11.5858V8C16 4.68629 13.3137 2 10 2Z"
                                            fill="white" />
                                        <path d="M10 18C8.34315 18 7 16.6569 7 15H13C13 16.6569 11.6569 18 10 18Z" fill="white" />
                                    </svg>
                                </span>
                            </li>
                            <li class="nav-item d-flex align-items-center">
                                <img src="{{asset('img/profile.jpg')}}" alt="" srcset="" class="rounded-full">
                                <a href="" class="nav-link text-white">
                                    Username
                                </a>
                            </li>
                        </div>

                    </ul>
                </div>
            </div>
        </nav>
        <div class="nav-scroller bg-white shadow-sm">
            <nav class="nav nav-underline container" aria-label="Secondary navigation">
                <a class="nav-link text-violet-900 active" aria-current="page" href="#">Dashboard</a>
                <a class="nav-link text-violet-900" href="#">
                    Friends
                </a>
                <a class="nav-link text-violet-900" href="#">Dashboard</a>
                <a class="nav-link text-violet-900" href="#">Component</a>
                <a class="nav-link text-violet-900" href="#">Appoitments</a>
                <a class="nav-link text-violet-900" href="#">Doctors</a>
                <a class="nav-link text-violet-900" href="#">Patients</a>
                <a class="nav-link text-violet-900" href="#">Messages</a>
                <a class="nav-link text-violet-900" href="#">Settings</a>
            </nav>
        </div>
        <main class="py-4">
            <div class="container">
                @yield('content')
            </div>
        </main>
    </div>
</body>
</html>
