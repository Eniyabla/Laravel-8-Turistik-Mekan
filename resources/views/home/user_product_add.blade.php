@php
    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp
@extends('layouts.master')
@section('title','User Place Add')
@section('description', $setting->description)
@section('keywords',$setting->keywords )
@section('location', $setting->location)
@section('header')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

@endsection


@section('content')

    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('user_product')}}">My Places</a></li>
                <li class="breadcrumb-item active">Add Place</li>
            </ul>
        </div>
    </div>
    <div class="my-account">
        <div class="container-fluid">
            <div class="row">
                @include('layouts._user_menu')
                <div class="col-md-10" style="top:0;">

                    <div class="container-fluid">


                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        @include('home.message')
                                        <h3 class="card-title">Add Place</h3>
                                        <form action="{{route('user_product_store')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-body">

                                                <div class="col-md-12">
                                                    <label for="Select1">Category</label>

                                                    <select class="form-control" id="Select1" name="category_id">
                                                        @foreach ($datalist as $data)
                                                            <option value="{{ $data->id }}">{{ App\Http\Controllers\Admin\CategoryController::getParentsTree($data,$data->title)}}</option>
                                                        @endforeach
                                                    </select>

                                                </div>

                                            </div>
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
                                                    <label>Keywords </label>
                                                    <div class="form-group">
                                                        <input name="keywords" type="text" class="form-control">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="form-body">

                                                <div class="col-md-12">
                                                    <label>Description </label>
                                                    <div class="form-group">
                                                        <input name="description" type="text" class="form-control">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="form-body">

                                                <div class="col-md-12">
                                                    <label>Country </label>
                                                    <div class="form-group">
                                                        <input name="country" type="text" class="form-control">
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="form-body">

                                                <div class="col-md-12">
                                                    <label>City </label>
                                                    <div class="form-group">
                                                        <input name="city" type="text" class="form-control">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="form-body">

                                                <div class="col-md-12">
                                                    <label>Location </label>
                                                    <div class="form-group">
                                                        <input name="location" type="text" class="form-control">
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="form-body">

                                                <div class="col-md-12">
                                                    <label>Detail </label>
                                                    <div class="form-group">
                                                        <textarea name="detail"  class="form-control" id="summernote" ></textarea>
                                                        <script>
                                                           $(document).ready(function() {
                                                              $('#summernote').summernote();
                                                            });
                                                        </script>
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

                                                    <div class="col-md-12">
                                                        <label for="Select2">status</label>

                                                        <select class="form-control" id="Select2" name="status">
                                                            <option value="false" >False</option>s
                                                            <option value="true">True</option>
                                                        </select>

                                                    </div>

                                                </div>
                                                <div class="form-body">

                                                    <div class="col-md-12">
                                                        <label>Slug </label>
                                                        <div class="form-group">
                                                            <input name="slug" type="text" class="form-control">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="form-actions">
                                                    <div class="text-right">
                                                        <button type="submit" class="btn btn-info">Add Product</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>


            </div>
        </div>
    </div>
        </div>
    </div>



@section('footer')
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <script src="{{ asset('assets/home')}}/js/accordion.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <script src="{{ asset('assets/admin')}}/assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('assets/admin')}}/dist/js/pages/datatable/datatable-basic.init.js"></script>
@endsection
@endsection


