@php
    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp
@extends('layouts.master')
@section('title','User Reviews')
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
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">Reviews</li>
            </ul>
        </div>
    </div>
    <div class="my-account">
        <div class="container-fluid">
            <div class="row">
                @include('layouts._user_menu')
                <div class="col-md-9" >
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                                <thead>
                                                <tr style="width: 80%">
                                                    <th># Id</th>
                                                    <th>Place_id</th>
                                                    <th>User</th>
                                                    <th style="width: 20px;">Ip</th>
                                                    <th>Subject</th>
                                                    <th>Review</th>
                                                    <th>Rate</th>
                                                    <th>Status</th>
                                                    <th colspan="2">Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($datalist as $data)
                                                    <tr>
                                                        <td>{{ $data->id }}</td>
                                                            <td>{{ $data->place_id }}</td>
                                                        <td>{{ $data->user->name}}</td>
                                                        <td>{{ $data->ip }}</td>
                                                        <td>{{ $data->subject }}</td>
                                                        <td>{{ $data->review }}</td>
                                                        <td>{{ $data->rate }}</td>
                                                        <td>{{ $data->status }}</td>
                                                        <td colspan="2" style="text-align:center;">
                                                            <a href="{{route('user_review_edit',['id'=>$data->id])}}"  onclick="return !window.open(this.href,'','top=50 left=100 width=800,height=600') " ><i style="color:green" class="fa fa-edit"></i></a>
                                                            &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <a href="{{route('user_review_delete',['id'=>$data->id])}}" onclick="return confirm('Are you sure to delete this record?') ">
                                                                <i style="color: red;" class="fa fa-trash-alt"></i>
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
    <script src="{{ asset('assets/home')}}/js/accordion.js"></script>
@endsection


