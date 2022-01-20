<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="@yield('description')">
    <meta name="city" content="@yield('city')">
    <meta name="country" content="@yield('country')">
    <meta name="location" content="@yield('location')">

    <title>@yield('title')</title>

    @section('header')
        @livewireScripts
@show
<!-- Favicon -->

    <link href="{{ asset('assets/img')}}/icon.jpg"  width="30px" height="30px" rel="icon">
    <!-- Google Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">
    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('assets/home')}}/lib/slick/slick.css" rel="stylesheet">
    <link href="{{ asset('assets/home')}}/lib/slick/slick-theme.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/home')}}/css/style.css" rel="stylesheet">
</head>




<body>
@php
    use App\Http\Controllers\HomeController;
    $setting=HomeController::getsetting();
    $parentCategories = \App\Http\Controllers\HomeController::categoryList()
@endphp

<div class="top-bar" style="background-color:white;color: red;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <i class="fa fa-envelope"></i>
                @if(!Empty($setting->email)){{$setting->email}}@endif

            </div>
            <div class="col-sm-6">
                <i class="fas fa-phone-alt"></i>
                @if(!Empty($setting->phone)){{$setting->phone}}@endif
            </div>

        </div>
    </div>
</div>
@include('layouts._header3')

<div class="bottom-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-2">
                <div class="logo">
                    <a href="{{route('home')}}" >
                        <h2 style="font-family: 'Segoe UI Black';font-size: 30px;" ><span style="color:red;">TUR</span><span style="color:black;">MEK</span></h2>
                    </a>
                </div>
            </div>

            <div class="col-md-8">


                <div class="search">
                    <form action="{{route('getplace')}}" method="post">
                        @csrf
                        @livewire('search')
                        <button><i class="fa fa-search"></i></button>
                    </form>
                    @livewireScripts
                </div>


            </div>
            <div class="col-md-2"></div>
            <!--div class="col-md-3">
                <div class="user">
                    <a href="wishlist.html" class="btn wishlist">
                        <i class="fa fa-heart"></i>
                        <span>(0)</span>
                    </a>
                    <a href="cart.html" class="btn cart">
                        <i class="fa fa-shopping-cart"></i>
                        <span>(0)</span>
                    </a>
                </div>
            </div-->
        </div>
    </div>
</div>


@section('content')
@show


@section('footer')
@show
@include('layouts._footer')
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets/home')}}/lib/easing/easing.min.js"></script>
<script src="{{ asset('assets/home')}}/lib/slick/slick.min.js"></script>

<!-- Template Javascript -->
<script src="{{ asset('assets/home')}}/js/main.js"></script>

</body>
</html>
