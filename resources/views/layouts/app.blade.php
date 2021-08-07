<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Koi Auction</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-top">
            <div class="container \">
                <a class="navbar-brand text-danger" href="{{ url('/') }}">
                    Koi Reqick
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav">
                        <!-- Authentication Links -->
                            <li class="nav-item">
                                <a class="nav-link text-danger" href="/">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-danger" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Products
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                  <li><a class="dropdown-item" href="/products/koi">Stock Koi For Sale</a></li>
                                  <li><a class="dropdown-item" href="/products/koifoods">Koi Food</a></li>
                                  <li><a class="dropdown-item" href="/products/koifilters">Filter</a></li>
                                  <li><a class="dropdown-item" href="/products/koimedicines">Medicine</a></li>
                                  <li><a class="dropdown-item" href="/products/koidfilters">Rotary Drum Filter</a></li>
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="/contacts">Contact Us</a>
                            </li>
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
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container mt-5">
                @yield('content')
                <p class="text-danger mb-4 display-6">Our Suppliers</p>
                    <div class="row">
                    <div class="col-6 col-sm-3 col-md-3 col-lg-2 mb-3">
                        <div class="card" style="">
                            <img src="/img/supplier/1.jpg" class="card-img-top" alt="..." width="50%">
                            <div class="card-body">
                            <p class="card-text">Supplier Name</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-3 col-md-3 col-lg-2 mb-3">
                        <div class="card" style="">
                            <img src="/img/supplier/2.jpg" class="card-img-top" alt="..." width="50%">
                            <div class="card-body">
                            <p class="card-text">Supplier Name</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-3 col-md-3 col-lg-2 mb-3">
                        <div class="card" style="">
                            <img src="/img/supplier/3.jpg" class="card-img-top" alt="..." width="50%">
                            <div class="card-body">
                            <p class="card-text">Supplier Name</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-3 col-md-3 col-lg-2 mb-3">
                        <div class="card" style="">
                            <img src="/img/supplier/4.jpg" class="card-img-top" alt="..." width="50%">
                            <div class="card-body">
                            <p class="card-text">Supplier Name</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer text-center mt-5">
                <h3 class="lead">&copy; Reqick Koi Auction @ 2021</h3>
            </div>
        </main>
    </div>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
