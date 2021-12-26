@php
    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp
@extends('layouts.master')
@section('title','Add Image')
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
                <li class="breadcrumb-item"><a href="{{route('user_product')}}">My Places</a></li>
                <li class="breadcrumb-item active">Add Image</li>
            </ul>
        </div>
    </div>
    <div class="my-account">
        <div class="container-fluid">
            <div class="row">
                @include('layouts._user_menu')
                <div class="col-md-9" style="top:0;">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card">

                                    <div class="card-body">
                                        <h3 class="card-title">Add Image to :</h3>
                                        @if($data->image)
                                            <img src="{{Storage::url($data->image)}}"style="display: block;margin-left: auto;margin-right: auto;width: 20%;" alt="">
                                        @endif
                                        <br><br>
                                        <h6 style="color: red;text-align: center;" class="card-title">{{$data->title}}</h6>
                                        <form action="{{route('user_image_store', ['product_id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-body">

                                                <div class="col-md-12">
                                                    <label>Title </label>
                                                    <div class="form-group">
                                                        <input name="title" type="text" class="form-control">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="form-body">

                                                <div class="col-md-12">
                                                    <label>image </label>
                                                    <div class="form-group">
                                                        <input name="image" type="file" class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-body">
                                                <div class="text-right">
                                                    <button type="submit" class="btn btn-info">Add Image</button>
                                                </div>
                                            </div>
                                        </form>
                                        <br>
                                        <table id="datatable-buttons" class="center table table-striped table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Title</th>
                                                <th>Image</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($images as $img)
                                                <tr>
                                                    <td>{{$img->id}}</td>
                                                    <td>{{$img->title}}</td>
                                                    <td >
                                                        @if($img->image)
                                                            <a href="" target="_blank"><img src="{{Storage::url($img->image)}}" style="display: block;margin-left: auto;margin-right: auto;width: 100px;" alt=""></a>
                                                        @endif
                                                    </td>
                                                    <td><a href="{{route('user_image_delete', ['id'=> $img->id,'product_id'=>$data->id])}}" onclick="return confirm('Are You Sure to delete this image?')" class=""><i class="fas fa-trash"></i></a></td>
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


