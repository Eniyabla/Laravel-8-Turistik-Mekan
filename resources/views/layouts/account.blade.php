@php
$setting=\App\Http\Controllers\HomeController::getsetting();
@endphp
@extends('layouts.master')
@section('title','User Account')
@section('description', $setting->description)
@section('keywords',$setting->keywords )
@section('location', $setting->location)
@section('header')
    <link href="{{ asset('assets/home')}}/css/accordion.css" rel="stylesheet">
@endsection



@section('content')

    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">Account</li>
            </ul>
        </div>
    </div>
    <div class="my-account">
        <div class="container-fluid">
            <div class="row">
               @include('layouts._user_menu')
    <div class="col-md-9" style="top:0;">
        <div class="container-fluid">
            <!-- *************************************************************** -->
            <!-- Start First Cards -->

            <!-- *************************************************************** -->
            <div class="card-group">
                <div class="card border-right">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <h4 class="text-dark mb-1 font-weight-medium">{{$messagesn}}</h4>
                                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate"><a href="{{route('user_message_new')}}">New Products</a></h6>
                                </div>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                    <span class="opacity-7 text-muted"><i data-feather="globe"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-right">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <h4 class="text-dark mb-1 w-100 text-truncate font-weight-medium"><sup
                                        class="set-doller"></sup>{{$products}}</h4>
                                <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">New Products
                                </h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted"><i data-feather="dollar-sign"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-right">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h4 class="text-dark mb-1 font-weight-medium">{{$messages}}</h4>
                                    <span
                                        class="badge bg-danger font-12 text-white font-weight-medium badge-pill ml-2 d-md-none d-lg-block">-18.33%</span>
                                </div>
                                <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">New Messages</h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted"><i data-feather="file-plus"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <h4 class="text-dark mb-1 font-weight-medium">{{$productsn}}</h4>
                                <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate"><a href="{{route('user_product_new')}}">New Products</a></h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted"><i data-feather="globe"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="card-group" >
                <div class="card border-right">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <h4 class="text-dark mb-1 font-weight-medium">{{$messagesr}}</h4>
                                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate"><a style="color:green;" href="{{route('user_message_read')}}">Read Messages</h6>
                                </div>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                    <span class="opacity-7 text-muted"><i data-feather="globe"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-right">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <h4 class="text-dark mb-1 w-100 text-truncate font-weight-medium"><sup
                                        class="set-doller"></sup>{{$products}}</h4>
                                <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Active Products
                                </h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted"><i data-feather="dollar-sign"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-right">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h4 class="text-dark mb-1 font-weight-medium">{{$messages}}</h4>
                                    <span
                                        class="badge bg-danger font-12 text-white font-weight-medium badge-pill ml-2 d-md-none d-lg-block">-18.33%</span>
                                </div>
                                <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">New Messages</h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted"><i data-feather="file-plus"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <h4 class="text-dark mb-1 font-weight-medium">{{$products}}</h4>
                                <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate"><a style="color:green;" href="{{route('user_product_active')}}">Active Products</h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted"><i data-feather="globe"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="card-group">
                <div class="card border-right">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div class="align-items-center">
                                    <h4 class="text-dark mb-1 font-weight-medium">{{$messagesall}}</h4>
                                    <h6 class="text-muted font-weight-normal mb-2 w-100 text-truncate"> <a class="nav-link" href="{{route('all_message')}}" role="tab">All Messages</a></h6>

                                </div>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                    <span class="opacity-7 text-muted"><i data-feather="globe"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-right">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <h4 class="text-dark mb-1 w-100 text-truncate font-weight-medium"><sup
                                        class="set-doller"></sup></h4>
                                <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Ne Products
                                </h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted"><i data-feather="dollar-sign"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-right">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div class="align-items-center">
                                    <h4 class="text-dark mb-1 font-weight-medium">{{$messagesall}}</h4>
                                    <h6 class="text-muted font-weight-normal mb-2 w-100 text-truncate"> <a class="nav-link" href="{{route('user_product')}}" role="tab">All Products</a></h6>

                                </div>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                    <span class="opacity-7 text-muted"><i data-feather="globe"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div class="align-items-center">
                                <h4 class="text-dark mb-1 font-weight-medium">{{$productsall}}</h4>
                                <h6 class="text-muted font-weight-normal mb-2 w-100 text-truncate"> <a class="nav-link" href="{{route('user_product')}}" role="tab">All Products</a></h6>

                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted"><i data-feather="globe"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="card-group">
                <div class="card border-right">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h4 class="text-dark mb-1 font-weight-medium">{{$reviewsnew}}</h4>
                                    <span
                                        class="badge bg-primary font-12 text-white font-weight-medium badge-pill ml-2 d-lg-block d-md-none"></span>
                                </div>
                                <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">New Reviews</h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted"><i data-feather="user-plus"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-right">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <h4 class="text-dark mb-1 w-100 text-truncate font-weight-medium"><sup
                                        class="set-doller"></sup>{{$reviewsactive}}</h4>
                                <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Activate Reviews
                                </h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted"><i data-feather="dollar-sign"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-right">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h4 class="text-dark mb-1 font-weight-medium">{{$reviewsinactive}}</h4>
                                    <span
                                        class="badge bg-danger font-12 text-white font-weight-medium badge-pill ml-2 d-md-none d-lg-block"></span>
                                </div>
                                <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Inactive Reviews</h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted"><i data-feather="file-plus"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <h4 class="text-dark mb-1 font-weight-medium">{{$reviewsall}}</h4>
                                <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">All Reviews</h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted"><i data-feather="globe"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<br><br>


        </div>
        </div>
            </div>
        </div>


@endsection
@section('footer')
    <script src="{{ asset('assets/home')}}/js/accordion.js"></script>
@endsection


