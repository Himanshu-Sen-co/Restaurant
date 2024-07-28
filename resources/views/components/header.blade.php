<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token()}}">

    <!-- Bootstrap CSS -->
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg ">
        <div>
        <a class="navbar-brand" href="#">
            <img src="{{ asset('logo/chef.jpg') }}" alt="chef logo" class="img-responsive" />
        </a>
        </div>
        {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">...</span>
        </button> --}}

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto mt-1 p-4 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('home') }}">Home
                      </a>
                </li>
                <ul class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      menu
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{route('menu')}}">Menu/Order</a></li>
                      <li><a class="dropdown-item" href="{{route('orders')}}">order Details</a></li>
                    </ul>
                </ul>
                @if (Auth::user()->role==='admin')    
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('AddProduct') }}">Add Product</a>
                </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact')}}">Contact us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about')}}">About us</a>
                </li>
            </ul>
            <div>
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('logo/logo3.png') }}" alt="Cart logo" class="img-responsive" />
                </a>
            </div>
            <div class="d-inline">
                @auth
                    <form class="form-inline my-2 my-lg-0" action="{{route('logout')}}" method="POST">
                        @csrf
                        @if (Auth::check())      
                        <h5 class="userEmail">Welcome,{{Auth::user()->name}}</h5>
                        @endif
                        <button type="submit" class="btn btn-primary">logout</button>
                    </form>
                @endauth
            </div>
        </div>
    </nav>
</body>

</html>
