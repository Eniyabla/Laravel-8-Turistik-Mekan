<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <!-- Favicon icon -->
<!--link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets')}}/admin/images/icon.png"-->
    <title>@yield('title')</title>
    <!-- Custom CSS -->
    <link href="{{ asset('assets')}}/admin/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('assets')}}/admin/dist/css/style.min.css" rel="stylesheet">
    <link href="{{ asset('assets')}}/admin/dist/css/style.css" rel="stylesheet">
    @section('header')
    @show

</head>

<body>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
     data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">


    @include('admin._header')
    @include('admin._sidebar')
    @section('content')
    @show
    @include('admin._footer')
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>
@section('footer')

    <script src="{{ asset('assets')}}/admin/libs/jquery/dist/jquery.min.js"></script>
    <script src="{{ asset('assets')}}/admin/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <!-- apps -->
    <script src="{{ asset('assets')}}/admin/dist/js/feather.min.js"></script>
    <script src="{{ asset('assets')}}/admin/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="{{ asset('assets')}}/admin/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('assets')}}/admin/dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
@section('footer')
@show
</body>

</html>
