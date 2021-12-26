@php
    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp
@extends('layouts.master')
@section('title','User Profile')
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
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item active">My Places</li>
            </ul>
        </div>
    </div>
    <div class="my-account">
        <div class="container-fluid">
            <div class="row">
                @include('layouts._user_menu')
                <div class="col-md-9" style="top:0;">
                    <div class="container-fluid">
                        @include('home.message')
                    <h3 class="card-title">Product List</h3>
                    <a href="{{route('user_product_create')}}"><button style="width:20%;" type="button" class="btn btn-block btn-primary">Add Product</button></a>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                            <thead>
                                            <tr style="width: 80%">
                                                <th># Id</th>
                                                <th>Catgory</th>
                                                <th style="width: 20px;">Title</th>
                                                <th>Country</th>
                                                <th>City</th>
                                                <th>Image</th>
                                                <th>Galery</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($datalist as $data)
                                                <tr>
                                                    <td>{{ $data->id }}</td>
                                                    <td>{{ App\Http\Controllers\Admin\CategoryController::getParentsTree($data->category,$data->category->title)}}</td>

                                                    <td style="width: 20px;">{{ $data->title }} </td>
                                                    <td>{{ $data->country }}</td>
                                                    <td>{{ $data->city }}</td>
                                                    <td>
                                                        @if($data->image)
                                                            <img src="{{Storage::url($data->image)}}" height="36">
                                                        @endif
                                                    </td>
                                                    <td style="justify-content:center"><a href="{{route('user_image_add',['product_id'=>$data->id])}}"><i class="fas fa-images"></i></a></td>
                                                    <td>{{ $data->status }}</td>
                                                    <td colspan="2" style="text-align:center;">
                                                        <a href="{{route('user_product_edit',['id'=>$data->id])}}" >
                                                            <img rel="icon"  width="20px" src="{{ asset('assets')}}/admin/images/edit.png">
                                                        </a>
                                                        &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <a href="{{route('user_product_delete',['id'=>$data->id])}}" onclick="return confirm('Are you sure to delete this record?') ">
                                                            <img rel="icon"  width="20px" src="{{ asset('assets')}}/admin/images/del.png">
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>




                    </div>
            </div>
        </div>
    </div>
    </div>
    </div>

@endsection
@section('footer')

            <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
            <script src="{{ asset('assets/home')}}/js/accordion.js"></script>
@endsection


