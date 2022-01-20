@php
    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp
@extends('layouts.master')
@section('title','Unread Messages')
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
                <li class="breadcrumb-item"><a href="{{route('myaccount')}}">Account</a></li>
                <li class="breadcrumb-item active">Unread Messages</li>
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
                                        <div class="table-responsive">
                                            <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                                <thead>
                                                <tr style="width: 80%">
                                                    <th>Subject</th>
                                                    <th>Messages</th>
                                                    <th>Status</th>
                                                    <th>Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($datalist as $data)
                                                    <tr>
                                                        <td>{{ $data->subject }}</td>
                                                        <td>{{ $data->message}}</td>
                                                        <td>{{ $data->status }}</td>
                                                        <td style="text-align:center;">
                                                            <a href="{{route('user_message_delete',['id'=>$data->id])}}" onclick="return confirm('Are you sure to delete this message?') ">
                                                                <span style="color:red;"><i class="fas fa-trash"></i></span>
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


        @endsection
        @section('footer')
            <script src="{{ asset('assets/home')}}/js/accordion.js"></script>
@endsection


