@extends('layouts.master')
@section('title',$data->title."Place Detail")
@section('description', $data->description)
@section('keywords',$data->keywords )
@section('location', $data->location)
@php
    $sum=$rev1+$rev2+$rev3+$rev4+$rev5;
    $sum*=0.01;
    if($sum==0)
        $sum=1;

@endphp

@section('header')
    <link href="{{ asset('assets/home/rate')}}/style.css" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }

        .fa {
            font-size: 25px;
        }

        .checked {
            color: orange;
        }

        /* Three column layout */
        .side {
            float: left;
            width: 15%;
            margin-top: 10px;
        }

        .middle {
            float: left;
            width: 70%;
            margin-top: 10px;
        }

        /* Place text to the right */
        .right {
            text-align: right;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* The bar container */
        .bar-container {
            width: 100%;
            background-color: #f1f1f1;
            text-align: center;
            color: white;
        }

        /* Individual bars */
        .bar-5 {width: {{$rev5/$sum}}%; height: 5px; background-color: #04AA6D;}
        .bar-4 {width: {{$rev4/$sum}}%; height: 5px; background-color: #2196F3;}
        .bar-3 {width: {{$rev3/$sum}}%; height: 5px; background-color: #00bcd4;}
        .bar-2 {width: {{$rev2/$sum}}%; height: 5px; background-color: #ff9800;}
        .bar-1 {width: {{$rev1/$sum}}%; height: 5px; background-color: #f44336;}

        /* Responsive layout - make the columns stack on top of each other instead of next to each other */
        @media (max-width: 600px) {
            .side, .middle {
                width: 100%;
            }
            /* Hide the right column on small screens */
            .right {
                display: none;
            }
        }
    </style>
@endsection

@section('content')


    @php
        $count=\App\Http\Controllers\HomeController::countreviews($data->id);
        $average=\App\Http\Controllers\HomeController::averagereviews($data->id);
        $average=round($average,1);
    @endphp
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Places</a></li>
                <li class="breadcrumb-item active">{{$data->title}} </li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <div class="product-detail">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-detail-top">
                        <div class="row " >

                            <div class="col-md-6" style="top: 50px;padding-left: 0;padding-right: 0;">
                                <div class="product-slider-single normal-slider">
                                    <img src="{{Storage::url($data->image)}}" style="height: 400px;width: 550px;" alt="Product Image">
                                    @foreach($datalist as $dat)
                                        <img src="{{Storage::url($dat->image)}}" style="height: 400px;width: 550px;" alt="Product Image">
                                    @endforeach
                                </div>


                                <div class="product-slider-single-nav normal-slider">
                                    <div class="slider-nav-img"><img src="{{Storage::url($data->image)}}" style="height:80px;" alt="Product Image"></div>
                                    @foreach($datalist as $dat)
                                        <div class="slider-nav-img"><img src="{{Storage::url($dat->image)}}"  style="height:80px;" alt="Product Image"></div>
                                    @endforeach
                                </div>

                            </div>
                            <!------------------------------------------------------>
                            <div class="col-md-6">
                                <div class="product-content" style="top: 20px;">
                                    <div class="title" ><h2  style="margin-top: 0;padding-bottom: 30px;">{{$data->title}}</h2></div>
                                    <div class="d-flex align-items-start justify-content-start mb-1">
                                        <small class="@if($average>=1) fa fa-star text-warning mr-1 @elseif($average<1 &&$average>0) fas fa-star-half-alt text-warning mr-1 @else fa fa-star text-dark mr-1 @endif"></small>
                                        <small class="@if($average>=2) fa fa-star text-warning mr-1 @elseif($average<2 &&$average>1) fas fa-star-half-alt text-warning mr-1 @else fa fa-star text-dark mr-1 @endif"></small>
                                        <small class="@if($average>=3) fa fa-star text-warning mr-1 @elseif($average<3 &&$average>2) fas fa-star-half-alt text-warning mr-1 @else fa fa-star text-dark mr-1 @endif"></small>
                                        <small class="@if($average>=4) fa fa-star text-warning mr-1 @elseif($average<4 &&$average>3) fas fa-star-half-alt text-warning mr-1 @else fa fa-star text-dark mr-1 @endif"></small>
                                        <small class="@if($average>=5) fa fa-star text-warning mr-1 @elseif($average<5 &&$average>4) fas fa-star-half-alt text-warning mr-1 @else fa fa-star text-dark mr-1 @endif"></small>

                                    </div>
                                    <!----------------------------------------------->
                                    <p style="padding-bottom: 30px;padding-top: 20px;">{{$average}} average based on {{$count}} reviews.</p>
                                    <hr style="border:3px solid #f1f1f1">

                                    <div class="price">
                                        <a href="#addreviews" >Add Review</a>
                                    </div>
                                    @if($data->city)<div class="price">
                                        city:
                                        {{$data->city}}
                                    </div>
                                    @endif
                                    @if($data->country)
                                        <div class="price">
                                            Country:
                                            {{$data->country}}
                                        </div>
                                    @endif
                                    @if($data->location)
                                        <div class="price">
                                            location:
                                            {{$data->location}}
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <!------------------------------->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row product-detail-bottom">
                        <div class="col-lg-12">
                            <ul class="nav nav-pills nav-justified">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="pill" href="#description">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#specification">Specification</a>
                                </li>
                                <li class="nav-item" id="addreviews">
                                    <a class="nav-link" data-toggle="pill" href="#reviews">Reviews ({{$count}})</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div id="description" class="container tab-pane active">

                                    {!!$data->detail!!}

                                </div>
                                <div id="specification" class="container tab-pane fade">
                                    <div class="row">
                                        <div class="col-md-6">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="reviews-submit">
                                                <h4>Specification</h4>

                                                {{$data->description }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="reviews" class="container tab-pane fade">
                                    <div class="row">

                                        <div class="col-md-6">
                                            @foreach($reviews as $rev)
                                                <div class="reviews-submitted">
                                                    <div class="reviewer">{{$rev->user->name}}- <span>{{$rev->created_at}}</span></div>
                                                    <div class="ratting">
                                                        <i class="fa fa-star @if($rev->rate<1) a @else b @endif"></i>
                                                        <i class="fa fa-star @if($rev->rate<2) a @else b @endif"></i>
                                                        <i class="fa fa-star @if($rev->rate<3) a @else b @endif"></i>
                                                        <i class="fa fa-star @if($rev->rate<4) a @else b @endif"></i>
                                                        <i class="fa fa-star @if($rev->rate<5) a @else b @endif"></i>
                                                    </div>
                                                    <div class="reviewer" style="size: 8px;">{{$rev->subject}}</div>
                                                    {{$rev->comment}}
                                                    <hr>
                                                </div>
                                            @endforeach
                                        </div>
                                <div class="col-md-6">
                                            <div class="reviews-submit">


                                                <div class="row">
                                                    <div class="side">
                                                        <div>5 star</div>
                                                    </div>
                                                    <div class="middle">
                                                        <div class="bar-container">
                                                            <div class="bar-5"></div>
                                                        </div>
                                                    </div>
                                                    <div class="side right">
                                                        <div>{{round($rev5/$sum,2)}}%</div>
                                                    </div>
                                                    <div class="side">
                                                        <div>4 star</div>
                                                    </div>
                                                    <div class="middle">
                                                        <div class="bar-container">
                                                            <div class="bar-4"></div>
                                                        </div>
                                                    </div>
                                                    <div class="side right">
                                                        <div>{{round($rev4/$sum,2)}}%</div>
                                                    </div>
                                                    <div class="side">
                                                        <div>3 star</div>
                                                    </div>
                                                    <div class="middle">
                                                        <div class="bar-container">
                                                            <div class="bar-3"></div>
                                                        </div>
                                                    </div>
                                                    <div class="side right">
                                                        <div>{{round($rev3/$sum,2)}}%</div>
                                                    </div>
                                                    <div class="side">
                                                        <div>2 star</div>
                                                    </div>
                                                    <div class="middle">
                                                        <div class="bar-container">
                                                            <div class="bar-2"></div>
                                                        </div>
                                                    </div>
                                                    <div class="side right">
                                                        <div>{{round($rev2/$sum,2)}}%</div>
                                                    </div>
                                                    <div class="side">
                                                        <div>1 star</div>
                                                    </div>
                                                    <div class="middle">
                                                        <div class="bar-container">
                                                            <div class="bar-1"></div>
                                                        </div>
                                                    </div>
                                                    <div class="side right">
                                                        <div>{{round($rev1/$sum,2)}}%</div>
                                                    </div>
                                                </div>
                                                <h4>Give your Review:</h4>
                                                @livewire('review',['id'=>$data->id])

                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Side Bar End -->
                </div>
            </div>
        </div>
    </div>

@endsection
