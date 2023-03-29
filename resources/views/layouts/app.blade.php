<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app" class="d-flex">
        @auth
        <div class="sidebar">
            <div class="header-box px-2 pt-3 d-flex justify-content-between">
                <h1 class="fs-4 d-flex">
                    <span class="px-2">
                        <i class="material-icons">apps</i>
                    </span>
                    <span>Dashboard</span>
                </h1>
                <button class="btn d-md-none d-block close-btn px-1 py-0 mb-1 text-white">
                    <i class="material-icons">close</i>
                </button>
            </div>
            @if(Auth::user()->role == 'admin')
                <ul class="list-unstyled my-4">
                    <li>
                        <a class="text-decoration-none d-flex" href="/admin/home">
                            <span class="ms-4 me-2"><i class="material-icons">house</i></span>
                            Home
                        </a>
                    </li>
                    <li>
                        <a class="text-decoration-none d-flex" href="/admin/doctor-accounts">
                            <span class="ms-4 me-2"><i class="material-icons">medication</i></span>
                            View Doctors
                        </a>
                    </li>
                    <li>
                        <a class="text-decoration-none d-flex" href="/admin/patient-accounts">
                            <span class="ms-4 me-2"><i class="material-icons">diversity_1</i></span>
                            View Patients
                        </a>
                    </li>
                    <li>
                        <a class="text-decoration-none d-flex" href="/admin/appointments">
                            <span class="ms-4 me-2"><i class="material-icons">checklist_rtl</i></span>
                            View Appointments
                        </a>
                    </li>
                    <li>
                        <a class="text-decoration-none d-flex" href="/admin/donors">
                            <span class="ms-4 me-2"><i class="material-icons">volunteer_activism</i></span>
                            View Donors
                        </a>
                    </li>
                </ul>
            @elseif(Auth::user()->role == 'doctor')
                <ul class="list-unstyled my-4">
                    <li>
                        <a class="text-decoration-none d-flex" href="/doctor/home">
                            <span class="ms-4 me-2"><i class="material-icons">house</i></span>
                            Home
                        </a>
                    </li>
                    <li>
                        <a class="text-decoration-none d-flex" href="/doctor/appointments">
                            <span class="ms-4 me-2"><i class="material-icons">diversity_1</i></span>
                            View Appointments
                        </a>
                    </li>
                    <li>
                        <a class="text-decoration-none d-flex" href="/doctor/patient-accounts">
                            <span class="ms-4 me-2"><i class="material-icons">medication</i></span>
                            View Patients
                        </a>
                    </li>
                    <li>
                        <a class="text-decoration-none d-flex" href="/doctor/description/create">
                            <span class="ms-4 me-2"><i class="material-icons">checklist_rtl</i></span>
                            Add Description
                        </a>
                    </li>
                </ul>
            @else
                <ul class="list-unstyled my-4">
                    <li>
                        <a class="text-decoration-none d-flex" href="/home">
                            <span class="ms-4 me-2"><i class="material-icons">house</i></span>
                            Home
                        </a>
                    </li>
                    <li>
                        <a class="text-decoration-none d-flex" href="/donor/create">
                            <span class="ms-4 me-2"><i class="material-icons">volunteer_activism</i></span>
                            Donate
                        </a>
                    </li>
                    <li>
                        <a class="text-decoration-none d-flex" href="/donors">
                            <span class="ms-4 me-2"><i class="material-icons">diversity_1</i></span>
                            View Donors
                        </a>
                    </li>
                    <li>
                        <a class="text-decoration-none d-flex" href="/doctors">
                            <span class="ms-4 me-2"><i class="material-icons">medication</i></span>
                            View Doctors
                        </a>
                    </li>
                    <li>
                        <a class="text-decoration-none d-flex" href="/appointments">
                            <span class="ms-4 me-2"><i class="material-icons">checklist_rtl</i></span>
                            Appointments
                        </a>
                    </li>
                </ul>
            @endif
            <ul class="list-unstyled">
                <li>
                    <a class="text-decoration-none d-flex" href="/profile">
                        <span class="ms-4 me-2"><i class="material-icons">person</i></span>
                        {{ Auth::user()->name }}
                    </a>
                </li>
                <li>
                    <a class="text-decoration-none d-flex" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <span class="ms-4 me-2"><i class="material-icons">logout</i></span>
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
        @endauth
        
        <div class="content">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    @guest
                        <a class="navbar-brand" href="{{ url('/') }}">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav me-auto">
                            </ul>
                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ms-auto">
                                <!-- Authentication Links -->
                                @guest
                                    @if (Route::has('login'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                    @endif
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @endguest
                            </ul>
                        </div>
                    @else
                        <div class="d-md-none d-block">
                            <button class="open-btn">
                                <i class="material-icons">menu_open</i>
                            </button>
                        </div>
                        
                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ms-auto">
                                <!-- Authentication Links -->
                                <li class="nav-item">
                                    Hello, {{ auth()->user()->name }}
                                </li>
                            </ul>
                    @endguest
                </div>
            </nav>
            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
