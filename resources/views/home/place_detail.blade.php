@extends('layouts.master')

@section('title',$data->title." Product List")
@section('description', $data->description)
@section('keywords',$data->keywords )
@section('location', $data->location)
@endsection


@section('content')


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

        <!-- Product Detail Start -->
        <div class="product-detail">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-detail-top" style="padding-top: 30px;padding-left: 30px;">
                            <div class="row align-items-center">

                                <div class="col-md-6">

                                    <div class="product-slider-single normal-slider">
                                    <img src="{{Storage::url($data->image)}}" alt="Product Image">
                                    @foreach($datalist as $dat)
                                        <img src="{{Storage::url($dat->image)}}" alt="Product Image">
                                        @endforeach
                                    </div>


                                    <div class="product-slider-single-nav normal-slider">
                                    <div class="slider-nav-img"><img src="{{Storage::url($data->image)}}" alt="Product Image"></div>
                                    @foreach($datalist as $dat)
                                        <div class="slider-nav-img"><img src="{{Storage::url($dat->image)}}" alt="Product Image"></div>
                                     @endforeach
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="product-content">
                                        <div class="title"><h2> {{$data->title}}</h2></div>
                                        @php
                                          $count=\App\Http\Controllers\HomeController::countreviews($data->id);
                                          $average=\App\Http\Controllers\HomeController::averagereviews($data->id);
                                        @endphp
                                        <div class="ratting">
                                            <i class="fa fa-star @if($average<1) -0 empty @endif"></i>
                                            <i class="fa fa-star @if($average<2) -0 empty @endif"></i>
                                            <i class="fa fa-star @if($average<3) -0 empty @endif"></i>
                                            <i class="fa fa-star @if($average<4) -0 empty @endif"></i>
                                            <i class="fa fa-star @if($average<5) -0 empty @endif"></i>
                                        </div>
                                        <div class="price">
                                           <a href="#reviews" >{{$count}} Review(s) | {{$average}} | Add Review</a>
                                        </div>
                                        <div class="p-size">
                                            <h4>Country:</h4>
                                            <div class="qty">
                                                {{$data->location}}
                                            </div>
                                        </div>
                                        <div class="p-size">
                                            <h4>City:</h4>
                                            <div class="btn-group btn-group-sm">
                                                {{$data->location}}
                                            </div>
                                        </div>
                                        <div class="p-color">
                                            <h4>Location:</h4>
                                            <div class="btn-group btn-group-sm">
                                                  {{$data->location}}
                                            </div>
                                        </div>
                                        <div class="action">
                                        </div>
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
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="pill" href="#reviews">Reviews ({{$count}} )</a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div id="description" class="container tab-pane active">
                                        <h4>Place description</h4>
                                        <p>
                                            {{$data->description}}
                                        </p>
                                    </div>
                                    <div id="specification" class="container tab-pane fade">
                                        <h4>Place Location</h4>
                                        {!! $data->detail !!}
                                    </div>
                                    <div id="reviews" class="container tab-pane fade">
                                        <div class="reviews-submitted">
                                            @foreach($reviews as $rev)
                                            <div class="reviewer">{{$rev->user->name}}- <span>{{$rev->created_at}}</span></div>
                                            <div class="ratting">
                                                <i class="fa fa-star @if($rev->rate<1) -0 empty @endif"></i>
                                                <i class="fa fa-star @if($rev->rate<2) -0 empty @endif"></i>
                                                <i class="fa fa-star @if($rev->rate<3) -0 empty @endif"></i>
                                                <i class="fa fa-star @if($rev->rate<4) -0 empty @endif"></i>
                                                <i class="fa fa-star @if($rev->rate<5) -0 empty @endif"></i>
                                            </div>
                                                <span>{{$rev->subject}}</span>
                                            <p>
                                                {{$rev->review}}
                                            </p>
                                            @endforeach
                                        </div>


                                        <!---------------------------------Review---------------------------->
                                        <div class="reviews-submit">
                                            <h4>Give your Review:</h4>
                                                @livewire('review',['id'=>$data->id])
                                        </div>

                                        <!----------------------------------->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product">
                            <div class="section-header">
                                <h1>Related Images</h1>
                            </div>

                            <div class="row align-items-center product-slider product-slider-3">
                                @foreach($datalist as $data)
                                <div class="col-lg-3">

                                    <div class="product-item">

                                        <div class="product-title">
                                            <a href="#"> {{$data->title}}}</a>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="product-image">
                                            <a href="product-detail.html">
                                                <img src="{{Storage::url($data->image)}}" alt="Product Image">
                                            </a>
                                            <div class="product-action">
                                                <a href="#"><i class="fa fa-cart-plus"></i></a>
                                                <a href="#"><i class="fa fa-heart"></i></a>
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-price">
                                            <h3><span>$</span>99</h3>
                                            <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                        </div>

                                    </div>
                                </div>
                                @endforeach
                                </div>
                            </div>

                        </div>
                    </div>


@endsection
