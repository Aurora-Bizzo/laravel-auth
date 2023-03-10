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
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Usando Vite -->
        @vite(['resources/js/app.js'])
    </head>

    <body>
        <div id="app">

            <nav class="navbar navbar-light bg-white shadow-sm sticky-top flex-md-nowrap p-2">
                <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/">
                    BoolPress
                </a>
                <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <input class="form-control w-100" type="text" placeholder="Search">
                <div class="navbar nav">
                    <div class="nav-item text-nowrap ms-2">
                        <a class="nav-link" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </nav>

            <div class="container-fluid vh-100">
                <div class="row h-100">
                    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark navbar-dark sidebar collapse">
                        <div class="position-sticky pt-3">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    {{Route::currentRouteName()}}
                                    <a class="nav-link text-white {{ Route::currentRouteName() == 'admin.dashboard' ? 'bg-secondary' : '' }}" href="{{route('admin.dashboard')}}">
                                        <i class="fa-solid fa-tachometer-alt fa-lg fa-fw"></i> Dashboard
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white {{ Route::currentRouteName() == 'admin.projects.index' ? 'bg-secondary' : '' }}" href="{{route('admin.projects.index') }}">
                                        <i class="fa-solid fa-newspaper fa-lg fa-fw"></i> Projects
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
    
                    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                        @yield('content')
                    </main>
                </div>
            </div>
        </div>
    </body>

</html>