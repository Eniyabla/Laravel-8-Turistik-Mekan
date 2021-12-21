
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

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <!-- Google Fonts -->
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


@include('layouts._header')
<div class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1">
            </div>
            @section('menu')
            @show
            <div class="col-md-9">
                @include('profile.show')
            </div>
        </div>
    </div>
</div>
<br>
<br>
<div class="brand">
    <div class="container-fluid">
        <div class="brand-slider">
            <div class="brand-item"><img src="{{ asset('assets/home')}}/img/brand-1.png" alt=""></div>
            <div class="brand-item"><img src="{{ asset('assets/home')}}/img/brand-2.png" alt=""></div>
            <div class="brand-item"><img src="{{ asset('assets/home')}}/img/brand-3.png" alt=""></div>
            <div class="brand-item"><img src="{{ asset('assets/home')}}/img/brand-4.png" alt=""></div>
            <div class="brand-item"><img src="{{ asset('assets/home')}}/img/brand-5.png" alt=""></div>
            <div class="brand-item"><img src="{{ asset('assets/home')}}/img/brand-6.png" alt=""></div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets/home')}}/lib/easing/easing.min.js"></script>
<script src="{{ asset('assets/home')}}/lib/slick/slick.min.js"></script>

<!-- Template Javascript -->
<script src="{{ asset('assets/home')}}/js/main.js"></script>
</body>
</html>
