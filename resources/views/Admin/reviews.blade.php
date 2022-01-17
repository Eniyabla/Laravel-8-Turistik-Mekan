@extends('admin.master')
@section('title', 'TUR-MEK | Reviews List')
@section('content')
@section('header')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
@endsection
<div class="container-fluid">
<h3 class="card-title">User List</h3>
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
                                                <th>user</th>
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
                                                <td>@if( $data->review ){{ $data->review }} @else None @endif</td>
                                                <td>{{ $data->rate }}</td>
                                                <td>{{ $data->status }}</td>
                                                <td colspan="2" style="text-align:center;">
                                                    <a href="{{route('admin_review_edit',['id'=>$data->id])}}"  onclick="return !window.open(this.href,'','top=50 left=100 width=800,height=600') " ><i style="color:green" class="fa fa-edit"></i></a>
                                                 &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                 <a href="{{route('admin_review_delete',['id'=>$data->id])}}" onclick="return confirm('Are you sure to delete this record?') ">
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

@endsection
@section('footer')

        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
        <script src="{{ asset('assets/admin')}}/dist/js/pages/datatable/datatable-basic.init.js"></script>
@endsection
