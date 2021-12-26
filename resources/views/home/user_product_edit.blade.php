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
                <li class="breadcrumb-item active">Edit Places</li>
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
                            <h3 class="card-title">Edit Place</h3>
                            <form action="{{route('user_product_update',['id'=>$data->id])}}" method="post">
                                @csrf
                                <div class="form-body">

                                    <div class="col-md-12">
                                        <label for="Select1">Category</label>

                                        <select class="form-control" id="Select1" name="category_id">
                                            @foreach ($datalist as $dat)
                                                <option value="{{ $dat->id }}" @if($dat->id==$data->parent_id) selected="selected" @endif >
                                                    {{ App\Http\Controllers\Admin\CategoryController::getParentsTree($dat,$dat->title)}}
                                                </option>
                                            @endforeach
                                        </select>

                                    </div>

                                </div>
                                <div class="form-body">

                                    <div class="col-md-12">
                                        <label>Title </label>
                                        <div class="form-group">
                                            <input  value="{{ $data->title }}" name="title" type="text" class="form-control">
                                        </div>
                                    </div>

                                </div>
                                <div class="form-body">

                                    <div class="col-md-12">
                                        <label>Keywords </label>
                                        <div class="form-group">
                                            <input value="{{ $data->keywords }}" name="keywords" type="text" class="form-control">
                                        </div>
                                    </div>

                                </div>
                                <div class="form-body">

                                    <div class="col-md-12">
                                        <label>Description </label>
                                        <div class="form-group">
                                            <input value="{{ $data->description }}" name="description" type="text" class="form-control">
                                        </div>
                                    </div>

                                </div>
                                <div class="form-body">

                                    <div class="col-md-12">
                                        <label>Country </label>
                                        <div class="form-group">
                                            <input value="{{ $data->country }}" name="country" type="text" class="form-control">
                                        </div>
                                    </div>

                                </div>

                                <div class="form-body">

                                    <div class="col-md-12">
                                        <label>City </label>
                                        <div class="form-group">
                                            <input value="{{ $data->city }}" name="city" type="text" class="form-control">
                                        </div>
                                    </div>

                                </div>
                                <div class="form-body">

                                    <div class="col-md-12">
                                        <label>Location </label>
                                        <div class="form-group">
                                            <input value="{{ $data->location }}" name="location" type="text" class="form-control">
                                        </div>
                                    </div>

                                </div>

                                <div class="form-body">



                                    <div class="col-md-12">
                                        <label>Detail </label>
                                        <div class="form-group">
                                            <textarea  name="detail"  id="summernote" class="form-control" >{{ $data->detail }}</textarea>
                                            <script>
                                                $(document).ready(function() {
                                                    $('#summernote').summernote();
                                                });
                                            </script>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-body">

                                    <div class="col-md-12">
                                        <label>image </label>
                                        <div class="form-group">
                                            <input value="{{ $data->image }}" name="image" type="file" class="form-control">
                                            @if($data->image)
                                                <img src="{{Storage::url($data->image)}}"height="36">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-body">

                                    <div class="col-md-12">
                                        <label for="Select2">status</label>

                                        <select class="form-control" id="Select2" name="status">
                                            <option value="{{ $data->status }}" >False</option>
                                            <option value="false" >False</option>
                                            <option value="true">True</option>
                                        </select>

                                    </div>

                                </div>
                                <div class="form-body">

                                    <div class="col-md-12">
                                        <label>Slug </label>
                                        <div class="form-group">
                                            <input vaulue="{{ $data->slug }}" name="slug" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-info">Edit Product</button>
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

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <script src="{{ asset('assets/home')}}/js/accordion.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <script src="{{ asset('assets/admin')}}/assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('assets/admin')}}/dist/js/pages/datatable/datatable-basic.init.js"></script>
@endsection
@endsection


