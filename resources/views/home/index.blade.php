@extends('layouts.master')
@section('header')
@php
    use App\Http\Controllers\HomeController;$setting=HomeController::getsetting();
@endphp
@endsection
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
               @include('layouts.dropdownmenu')
           </div>

            <div class="col-md-7">
                <div class="header-slider normal-slider">

                   @foreach($slider as $sl)

                    <div class="header-slider-item ">
                        <img src="{{ Storage::url($sl->image)}}" alt="{{$sl->title}}" style="height: 400px;width: 700px;" />

                        <div class="header-slider-caption" >
                            <p>{{$sl->title}}</p>
                            <a href="{{route('product_detail',['id'=>$sl->id])}}" class="btn">Open</a>
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>
            <div class="col-md-3">
                <div class="header-img">
                    <div class="img-item">
                        <img src="{{ Storage::url($sl->image)}}" alt="{{$sl->title}}" />

                        <a class="img-text" href="">
                            <p>Some text goes here that describes the image</p>
                        </a>
                    </div>
                    <div class="img-item">
                        <img src="{{ Storage::url($sl->image)}}" alt="{{$sl->title}}" />

                        <a class="img-text" href="">
                            <p>Some text goes here that describes the image</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
            <h1>Latest Places</h1>
        </div>
        <div class="row align-items-center product-slider product-slider-4">
        @foreach($country as $dat)
                            <div class="col-md-3">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="{{route('product_detail',['id'=>$dat->id])}}">{{$dat->title}}</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="{{route('product_detail',['id'=>$dat->id])}}">
                                            <img src="{{Storage::url($dat->image)}}"height="180px" alt="{{$dat->title}}">
                                        </a>
                                        <div class="product-action">
                                        
                                            <a href="#"><i class="far fa-comments"></i></a>
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a class="" href=""><i style="color:blue;"class="fas fa-thumbs-down"></i></a>
                                            <a class="" href=""><i style="color:red;"class="fas fa-thumbs-down"></i></i></a>
                                        </div>
                                    </div>
                                    
                                    <div class="product-price">
                                        <h3><span>{{$dat->city}}</span></h3>
                                        
                                    </div>
                                    
                                </div>
                               
                            </div>
                            
           
                            @endforeach
                            </div>
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

<!-- Featured Product Start -->
<div class="featured-product product">
    <div class="container-fluid">
        <div class="section-header">
            <h1>Newest Places</h1>
        </div>
        <div class="row align-items-center product-slider product-slider-4">
        @foreach($picked as $dat)
                            <div class="col-md-3">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="{{route('product_detail',['id'=>$dat->id])}}">{{$dat->title}}</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="{{route('product_detail',['id'=>$dat->id])}}">
                                            <img src="{{Storage::url($dat->image)}}"height="180px" alt="{{$dat->title}}">
                                        </a>
                                        <div class="product-action">
                                        
                                            <a href="#"><i class="far fa-comments"></i></a>
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a class="" href=""><i style="color:blue;"class="fas fa-thumbs-down"></i></a>
                                            <a class="" href=""><i style="color:red;"class="fas fa-thumbs-down"></i></i></a>
                                        </div>
                                    </div>
                                    
                                    <div class="product-price">
                                        <h3><span>{{$dat->city}}</span></h3>
                                        
                                    </div>
                                    
                                </div>
                               
                            </div>
                            
           
                            @endforeach
                            </div>
    </div>
        </div>
    </div>
</div>
<!-- Featured Product End -->

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
<div class="recent-product product">
    <div class="container-fluid">
        <div class="section-header">
            <h1>Recent Places</h1>
        </div>
        <div class="row align-items-center product-slider product-slider-4">
        @foreach($title as $dat)
                            <div class="col-md-3">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="{{route('product_detail',['id'=>$dat->id])}}">{{$dat->title}}</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="{{route('product_detail',['id'=>$dat->id])}}">
                                            <img src="{{Storage::url($dat->image)}}"height="180px" alt="{{$dat->title}}">
                                        </a>
                                        <div class="product-action">
                                        
                                            <a href="#"><i class="far fa-comments"></i></a>
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a class="" href=""><i style="color:blue;"class="fas fa-thumbs-down"></i></a>
                                            <a class="" href=""><i style="color:red;"class="fas fa-thumbs-down"></i></i></a>
                                        </div>
                                    </div>
                                    
                                    <div class="product-price">
                                        <h3><span>{{$dat->city}}</span></h3>
                                        
                                    </div>
                                    
                                </div>
                               
                            </div>
                            
           
                            @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Recent Product End -->

<!-- Review Start -->
<div class="review">
    <div class="container-fluid">
        <div class="row align-items-center review-slider normal-slider">
            <div class="col-md-6">
                <div class="review-slider-item">
                    <div class="review-img">
                        <img src="{{ asset('assets/home')}}/img/review-1.jpg" alt="Image">
                    </div>
                    <div class="review-text">
                        <h2>Customer Name</h2>
                        <h3>Profession</h3>
                        <div class="ratting">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae nunc eget leo finibus luctus et vitae lorem
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="review-slider-item">
                    <div class="review-img">
                        <img src="{{ asset('assets/home')}}/img/review-2.jpg" alt="Image">
                    </div>
                    <div class="review-text">
                        <h2>Customer Name</h2>
                        <h3>Profession</h3>
                        <div class="ratting">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae nunc eget leo finibus luctus et vitae lorem
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="review-slider-item">
                    <div class="review-img">
                        <img src="{{ asset('assets/home')}}/img/review-3.jpg" alt="Image">
                    </div>
                    <div class="review-text">
                        <h2>Customer Name</h2>
                        <h3>Profession</h3>
                        <div class="ratting">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae nunc eget leo finibus luctus et vitae lorem
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
