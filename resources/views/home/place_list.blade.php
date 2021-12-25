@extends('layouts.master')

@section('title',$search." Product List")
@endsection


@section('content')
    <div class="breadcrumb-wrap">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">{{$search}}  Place List</li>
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

                        <div class="col-md-12">
                            <div class="product-view-top">
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
                        </div>
                        @foreach($datalist as $dat)
                            <div class="col-md-3">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="#">{{$dat->title}}</a>
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
                                <span style="">
                                <i style="color:blue;" class="fas fa-thumbs-up">5</i>
                                <i style="color:red;"class="fas fa-thumbs-down">5</i>
                                <i style="color:light;"class="far fa-comments">100</i>
                            </span>
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
