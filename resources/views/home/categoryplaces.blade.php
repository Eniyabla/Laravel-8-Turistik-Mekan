@extends('layouts.master')

@section('title',$data->title." Product List")
@section('description', $data->description)
@section('keywords',$data->keywords )
@section('location', $data->location)
@endsection


@section('content')
<div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">{{ App\Http\Controllers\Admin\CategoryController::getParentsTree($data,$data->title)}}</li>
                </ul>
            </div>
        </div>

        <div class="product-view">
            <div class="container-fluid">
                <div class="row">

<!------------------------------------------------------------>

<!------------------------------------------------------------->


                    <div class="col-lg-12">
                        <div class="row">

                            <!--div class="col-md-12">
                                <--div class="product-view-top">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="product-search">
                                                <input type="email" value="Search">
                                                <button><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="product-short">
                                                <div class="dropdown">
                                                    <div class="dropdown-toggle" data-toggle="dropdown">Product short by</div>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item">Newest</a>
                                                        <a href="#" class="dropdown-item">Popular</a>
                                                        <a href="#" class="dropdown-item">Most sale</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="product-price-range">
                                                <div class="dropdown">
                                                    <div class="dropdown-toggle" data-toggle="dropdown">Product price range</div>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item">$0 to $50</a>
                                                        <a href="#" class="dropdown-item">$51 to $100</a>
                                                        <a href="#" class="dropdown-item">$101 to $150</a>
                                                        <a href="#" class="dropdown-item">$151 to $200</a>
                                                        <a href="#" class="dropdown-item">$201 to $250</a>
                                                        <a href="#" class="dropdown-item">$251 to $300</a>
                                                        <a href="#" class="dropdown-item">$301 to $350</a>
                                                        <a href="#" class="dropdown-item">$351 to $400</a>
                                                        <a href="#" class="dropdown-item">$401 to $450</a>
                                                        <a href="#" class="dropdown-item">$451 to $500</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div-->
                            @foreach($datalist as $dat)
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

                        <!-- Pagination Start -->
                        <div class="col-md-12">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Pagination Start -->
                    </div>

                    <!-- Side Bar Start -->

                    <!-- Side Bar End -->
                </div>
            </div>
        </div>


@endsection
