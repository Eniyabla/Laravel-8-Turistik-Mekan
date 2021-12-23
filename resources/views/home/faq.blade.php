@php
$setting=\App\Http\Controllers\HomeController::getsetting();
@endphp
@extends('layouts.master')
@section('title','Frequently Asked Questions ')
@section('description', $setting->description)
@section('keywords',$setting->keywords )
@section('location', $setting->location)
@section('header')
    <link href="{{ asset('assets/home')}}/css/accordion.css" rel="stylesheet">
@endsection

@section('footer')

@endsection

@section('content')

    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">FAQ</li>
            </ul>
        </div>
    </div>
    <div class="my-account">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="dashboard-nav" data-toggle="pill" href="#dashboard-tab" role="tab"><i class="fa fa-tachometer-alt"></i>Dashboard</a>
                        <a class="nav-link" id="orders-nav" data-toggle="pill" href="#orders-tab" role="tab"><i class="fa fa-shopping-bag"></i>Orders</a>
                        <a class="nav-link" id="payment-nav" data-toggle="pill" href="#payment-tab" role="tab"><i class="fa fa-credit-card"></i>Payment Method</a>
                        <a class="nav-link" id="address-nav" data-toggle="pill" href="#address-tab" role="tab"><i class="fa fa-map-marker-alt"></i>address</a>
                        <a class="nav-link" id="account-nav" data-toggle="pill" href="#account-tab" role="tab"><i class="fa fa-user"></i>Account Details</a>
                        <a class="nav-link" href="index.html"><i class="fa fa-sign-out-alt"></i>Logout</a>
                    </div>
                </div>
    <div class="col-md-9">
        <div class="tab-content" style="top: 0;">
            <div class="tab-pane fade show active" id="dashboard-tab" role="tabpanel" aria-labelledby="dashboard-nav">


                <div class="accordion-body" >
                    <div class="accordion">
                        <h1>Frequently Asked Questions</h1>
                        <hr>
                        @foreach($datalist as $faq)
                        <div class="container">
                            <div class="label">{{$faq->question}}</div>
                            <div class="content"> {!! $faq->answer !!} </div>
                        </div>
                      @endforeach
                    </div>
                </div>

        </div>
    </div>
        </div>
            </div>
        </div>
    </div>
<script>
    const accordion = document.getElementsByClassName('container');

    for (i=0; i<accordion.length; i++) {
        accordion[i].addEventListener('click', function () {
            this.classList.toggle('active')
        })
    }
</script>

@endsection
@section('footer')
    <script src="{{ asset('assets/home')}}/js/accordion.js"></script>
@endsection


