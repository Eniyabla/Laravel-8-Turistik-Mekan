@extends('layouts.master')

@section('title',$data->title."Place Detail")
@section('description', $data->description)
@section('keywords',$data->keywords )
@section('location', $data->location)
@section('header')
    <link href="{{ asset('assets/home/rate')}}/style.css" rel="stylesheet">
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
                        <div class="row align-items-center">

                            <div class="col-md-6" style="top: 50px;">
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
                            <div class="col-md-4">
                                <div class="product-content" style="top: 0;">
                                    <div class="title" ><h2  style="margin-top: 0;">{{$data->title}}</h2></div>
                                    <div class="d-flex align-items-center justify-content-center mb-1">
                                        <small class="@if($average>=1) fa fa-star text-warning mr-1 @elseif($average<1 &&$average>0) fa fa-star-half-alt text-warning mr-1 @else fa fa-star text-dark mr-1 @endif"></small>
                                        <small class="@if($average>=2) fa fa-star text-warning mr-1 @elseif($average<2 &&$average>1) fa fa-star-half-alt text-warning mr-1 @else fa fa-star text-dark mr-1 @endif"></small>
                                        <small class="@if($average>=3) fa fa-star text-warning mr-1 @elseif($average<3 &&$average>2) fa fa-star-half-alt text-warning mr-1 @else fa fa-star text-dark mr-1 @endif"></small>
                                        <small class="@if($average>=4) fa fa-star text-warning mr-1 @elseif($average<4 &&$average>3) fa fa-star-half-alt text-warning mr-1 @else fa fa-star text-dark mr-1 @endif"></small>
                                        <small class="@if($average>=5) fa fa-star text-warning mr-1 @elseif($average<5 &&$average>4) fa fa-star-half-alt text-warning mr-1 @else fa fa-star text-dark mr-1 @endif"></small>
                                        <small>({{$average}}/5)</small>
                                    </div>
                                    <div class="price">
                                        <a href="#addreviews" > {{$count}} Review(s) ••{{$average}}•• <em>+ Add Review</em></a>
                                    </div>
                                    @if($data->city)<div class="price">
                                        <h5>city:</h5>
                                        <p> {{$data->city}}</p>
                                    </div>
                                    @endif
                                    @if($data->country)
                                        <div class="price">
                                            <h5>Country:</h5>
                                            <p> {{$data->country}}</p>
                                        </div>
                                    @endif
                                    @if($data->location)
                                        <div class="price">
                                            <h5>location:</h5>
                                            <p> {{$data->location}}</p>
                                        </div>
                                    @endif
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
                                    <a class="nav-link" data-toggle="pill" href="#specification">Comments(5)</a>
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
                                            <h4>Leave a comment</h4>
                                            @livewire('review',['id'=>$data->id])

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
                                                    <div class="reviewer" style="color:orangered;size: 12px;">{{$rev->subject}}</div>
                                                    <p>{{$rev->comment}}</p>
                                                    <hr>

                                                </div>
                                            @endforeach
                                        </div>

                                        <div class="col-md-6">
                                            <div class="reviews-submit">
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
