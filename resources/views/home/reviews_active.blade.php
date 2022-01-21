@php
    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp
@extends('layouts.master')
@section('title','Active Reviews')

@section('header')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    <link href="{{ asset('assets')}}/admin/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('assets')}}/admin/dist/css/style.min.css" rel="stylesheet">
    <link href="{{ asset('assets')}}/admin/dist/css/style.css" rel="stylesheet">
@endsection
@section('content')

    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('myaccount')}}">Account</a></li>
                <li class="breadcrumb-item active">Active Reviews</li>
            </ul>
        </div>
    </div>
    <div class="my-account">
        <div class="container-fluid">
            <div class="row">
                @include('layouts._user_menu')
                <div class="col-md-10" >
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                                <thead>
                                                <tr>
                                                    <th># Id</th>
                                                    <th>Place_id</th>
                                                    <th>User</th>
                                                    <th>Subject</th>
                                                    <th>Review</th>
                                                    <th>Rate</th>
                                                    <th>Status</th>
                                                    <th >Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($datalist as $data)
                                                    <tr>
                                                        <td>{{ $data->id }}</td>
                                                            <td>{{ $data->place_id }}</td>
                                                        <td>{{ $data->user->name}}</td>
                                                        <td>{{ $data->subject }}</td>
                                                        <td>{{ $data->comment }}</td>
                                                        <td>{{ $data->rate }}</td>
                                                        <td>{{ $data->status }}</td>
                                                        <td style="text-align:center;">
                                                            <a href="{{route('user_review_delete',['id'=>$data->id])}}" onclick="return confirm('Are you sure to delete this record?') ">
                                                                <i style="color: red;" class="fas fa-trash-alt"></i>
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
    <script src="{{ asset('assets')}}/admin/libs/jquery/dist/jquery.min.js"></script>
    <script src="{{ asset('assets')}}/admin/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="{{ asset('assets')}}/admin/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="{{ asset('assets')}}/admin/dist/js/app-style-switcher.js"></script>
    <script src="{{ asset('assets')}}/admin/dist/js/feather.min.js"></script>
    <script src="{{ asset('assets')}}/admin/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="{{ asset('assets')}}/admin/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('assets')}}/admin/dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="{{ asset('assets')}}/admin/libs/chartist/dist/chartist.min.js"></script>
    <script src="{{ asset('assets')}}/admin/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="{{ asset('assets')}}/admin/dist/js/pages/dashboards/dashboard1.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <script src="{{ asset('assets/admin')}}/dist/js/pages/datatable/datatable-basic.init.js"></script>
@endsection


