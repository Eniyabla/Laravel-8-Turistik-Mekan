@extends('layouts.master')

@section('header')
    @php
        use App\Http\Controllers\HomeController;$setting=HomeController::getsetting();
    @endphp

@section('title',$setting->title )
@section('description', $setting->description)
@section('keywords',$setting->keywords )
@section('location', $setting->location)
@endsection
@section('content')
    @php
        $parentCat=\App\Http\Controllers\HomeController::categorylist();
        $slider=\App\Http\Controllers\HomeController::slider();

    @endphp

    <!-- Main Slider Start -->
    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                </div>

                <div class="col-md-8">
                    <div class="header-slider normal-slider">

                        @foreach($slider as $sl)

                            <div class="header-slider-item ">
                                <img src="{{ Storage::url($sl->image)}}" alt="{{$sl->title}}" style="height: 400px;width: 800px;" />

                                <div class="header-slider-caption" >
                                    <p>{{$sl->title}}</p>
                                    <a href="{{route('product_detail',['id'=>$sl->id])}}" class="btn">Gallery</a>
                                </div>
                            </div>

                        @endforeach
                    </div>
                </div>
                <div class="col-md-2">

                </div>
            </div>
        </div>
    </div>
    <br>
    <!-- Main Slider End -->

    <!-- Brand Start -->
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
    <!-- Brand End -->
    <!-- Feature Start-->


    <div class="featured-product product">
        <div class="container-fluid">
            <div class="section-header">
                <h1>Recent Places</h1>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    @foreach($latest as $dat)
                        @php
                            $count=\App\Http\Controllers\HomeController::countreviews($dat->id);
                            $average=\App\Http\Controllers\HomeController::averagereviews($dat->id);
                            $average=round($average,1);
                        @endphp
                        <div class="col-md-3">
                            <div class="product-item">
                                <div class="product-title">
                                    <a href="{{route('product_detail',['id'=>$dat->id])}}">{{$dat->title}}</a>
                                    <div class="d-flex align-items-center justify-content-center mb-1">
                                        <small class="@if($average>=1) fa fa-star text-warning mr-1 @elseif($average<1 &&$average>0) fa fa-star-half-alt text-warning mr-1 @else fa fa-star text-dark mr-1 @endif"></small>
                                        <small class="@if($average>=2) fa fa-star text-warning mr-1 @elseif($average<2 &&$average>1) fa fa-star-half-alt text-warning mr-1 @else fa fa-star text-dark mr-1 @endif"></small>
                                        <small class="@if($average>=3) fa fa-star text-warning mr-1 @elseif($average<3 &&$average>2) fa fa-star-half-alt text-warning mr-1 @else fa fa-star text-dark mr-1 @endif"></small>
                                        <small class="@if($average>=4) fa fa-star text-warning mr-1 @elseif($average<4 &&$average>3) fa fa-star-half-alt text-warning mr-1 @else fa fa-star text-dark mr-1 @endif"></small>
                                        <small class="@if($average>=5) fa fa-star text-warning mr-1 @elseif($average<5 &&$average>4) fa fa-star-half-alt text-warning mr-1 @else fa fa-star text-dark mr-1 @endif"></small>
                                        <small style="color:white;">({{$average}})</small>
                                    </div>
                                </div>
                                <div class="product-image">
                                    <a href="{{route('product_detail',['id'=>$dat->id])}}">
                                        <img src="{{Storage::url($dat->image)}}"height="180px" alt="{{$dat->title}}">
                                    </a>
                                    <div class="product-action">

                                    </div>
                                </div>
                                @livewire('like',['product_id'=>$dat->id])

                            </div>
                            <br>
                        </div>


                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <!-- Feature End-->

    <!-- Category Start-->

    <!-- Category End-->

    <!-- Call to Action Start -->
    <div class="call-to-action">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1>call us for any queries</h1>
                </div>
                <div class="col-md-6">
                    <a href="tel:{{$setting->phone}}">@if(!Empty($setting->phone)){{$setting->phone}}@endif</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Call to Action End -->

    <!-- Feature Start-->



    <!-- Feature Start-->


    <div class="featured-product product">
        <div class="container-fluid">
            <div class="section-header">
                <h1>Picked Places</h1>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    @foreach($picked as $dat)
                        @php
                            $count=\App\Http\Controllers\HomeController::countreviews($dat->id);
                            $average=\App\Http\Controllers\HomeController::averagereviews($dat->id);
                            $average=round($average,1);
                        @endphp
                        <div class="col-md-3">
                            <div class="product-item">
                                <div class="product-title">
                                    <a href="{{route('product_detail',['id'=>$dat->id])}}">{{$dat->title}}</a>
                                    <div class="d-flex align-items-center justify-content-center mb-1">
                                        <small class="@if($average>=1) fa fa-star text-warning mr-1 @elseif($average<1 &&$average>0) fa fa-star-half-alt text-warning mr-1 @else fa fa-star text-dark mr-1 @endif"></small>
                                        <small class="@if($average>=2) fa fa-star text-warning mr-1 @elseif($average<2 &&$average>1) fa fa-star-half-alt text-warning mr-1 @else fa fa-star text-dark mr-1 @endif"></small>
                                        <small class="@if($average>=3) fa fa-star text-warning mr-1 @elseif($average<3 &&$average>2) fa fa-star-half-alt text-warning mr-1 @else fa fa-star text-dark mr-1 @endif"></small>
                                        <small class="@if($average>=4) fa fa-star text-warning mr-1 @elseif($average<4 &&$average>3) fa fa-star-half-alt text-warning mr-1 @else fa fa-star text-dark mr-1 @endif"></small>
                                        <small class="@if($average>=5) fa fa-star text-warning mr-1 @elseif($average<5 &&$average>4) fa fa-star-half-alt text-warning mr-1 @else fa fa-star text-dark mr-1 @endif"></small>
                                        <small style="color:white;">({{$average}})</small>
                                    </div>
                                </div>
                                <div class="product-image">
                                    <a href="{{route('product_detail',['id'=>$dat->id])}}">
                                        <img src="{{Storage::url($dat->image)}}"height="180px" alt="{{$dat->title}}">
                                    </a>
                                    <div class="product-action">

                                    </div>
                                </div>
                                @livewire('like',['product_id'=>$dat->id])

                            </div>
                            <br>
                        </div>


                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <!-- Feature End-->

    <!-- Newsletter Start -->
    <div class="newsletter">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <h1>Subscribe Our Newsletter</h1>
                </div>
                <div class="col-md-6">
                    <div class="form">
                        <input type="email" value="Your email here">
                        <button>Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->

    <!-- Recent Product Start -->

    <!-- Feature Start-->


    <div class="featured-product product">
        <div class="container-fluid">
            <div class="section-header">
                <h1>Recent Places</h1>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    @foreach($title as $dat)
                        @php
                            $count=\App\Http\Controllers\HomeController::countreviews($dat->id);
                            $average=\App\Http\Controllers\HomeController::averagereviews($dat->id);
                            $average=round($average,1);
                        @endphp
                        <div class="col-md-3">
                            <div class="product-item">
                                <div class="product-title">
                                    <a href="{{route('product_detail',['id'=>$dat->id])}}">{{$dat->title}}</a>
                                    <div class="d-flex align-items-center justify-content-center mb-1">
                                        <small class="@if($average>=1) fa fa-star text-warning mr-1 @elseif($average<1 &&$average>0) fa fa-star-half-alt text-warning mr-1 @else fa fa-star text-dark mr-1 @endif"></small>
                                        <small class="@if($average>=2) fa fa-star text-warning mr-1 @elseif($average<2 &&$average>1) fa fa-star-half-alt text-warning mr-1 @else fa fa-star text-dark mr-1 @endif"></small>
                                        <small class="@if($average>=3) fa fa-star text-warning mr-1 @elseif($average<3 &&$average>2) fa fa-star-half-alt text-warning mr-1 @else fa fa-star text-dark mr-1 @endif"></small>
                                        <small class="@if($average>=4) fa fa-star text-warning mr-1 @elseif($average<4 &&$average>3) fa fa-star-half-alt text-warning mr-1 @else fa fa-star text-dark mr-1 @endif"></small>
                                        <small class="@if($average>=5) fa fa-star text-warning mr-1 @elseif($average<5 &&$average>4) fa fa-star-half-alt text-warning mr-1 @else fa fa-star text-dark mr-1 @endif"></small>
                                        <small style="color:white;">({{$average}})</small>
                                    </div>
                                </div>
                                <div class="product-image">
                                    <a href="{{route('product_detail',['id'=>$dat->id])}}">
                                        <img src="{{Storage::url($dat->image)}}"height="180px" alt="{{$dat->title}}">
                                    </a>
                                    <div class="product-action">

                                    </div>
                                </div>
                                @livewire('like',['product_id'=>$dat->id])

                            </div>
                            <br>
                        </div>


                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <!-- Feature End-->

    <!-- Review Start -->
    <div class="review">
        <div class="container-fluid">
            <div class="row align-items-center review-slider normal-slider">
                @foreach($topuser as $topuser)
                    <div class="col-md-6">
                        <div class="review-slider-item">
                            <div class="review-img">
                                <img src="{{ Storage::url($topuser->profile_photo_path)}}" alt="{{$topuser->name}}" style="height: 400px;width: 800px;" />
                            </div>
                            @php  $average=0;
                            @endphp
                            <div class="review-text">
                                <h2>{{$topuser->name}}</h2>
                                <h3>Profession</h3>
                                <div class="d-flex align-items-center justify-content-center mb-1">
                                    <small class="@if($average>=1) fa fa-star text-warning mr-1 @elseif($average<1 &&$average>0) fa fa-star-half-alt text-warning mr-1 @else fa fa-star text-dark mr-0 @endif"></small>
                                    <small class="@if($average>=2) fa fa-star text-warning mr-1 @elseif($average<2 &&$average>1) fa fa-star-half-alt text-warning mr-1 @else fa fa-star text-dark mr-0 @endif"></small>
                                    <small class="@if($average>=3) fa fa-star text-warning mr-1 @elseif($average<3 &&$average>2) fa fa-star-half-alt text-warning mr-1 @else fa fa-star text-dark mr-0 @endif"></small>
                                    <small class="@if($average>=4) fa fa-star text-warning mr-1 @elseif($average<4 &&$average>3) fa fa-star-half-alt text-warning mr-1 @else fa fa-star text-dark mr-0 @endif"></small>
                                    <small class="@if($average>=5) fa fa-star text-warning mr-1 @elseif($average<5 &&$average>4) fa fa-star-half-alt text-warning mr-1 @else fa fa-star text-dark mr-0 @endif"></small>
                                    <small>({{$average}})</small>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae nunc eget leo finibus luctus et vitae lorem
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

@endsection

