@extends('admin.master')
@section('title', 'TUR-MEK | User List')
@section('content')
@section('header')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
@endsection
<div class="container-fluid">
<h3 class="card-title">User List</h3>
<a href="{{route('admin_user_create')}}"><button style="width:20%;" type="button" class="btn btn-block btn-primary">Add User</button></a>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr style="width: 80%">
                                                <th># Id</th>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th style="width: 20px;">Email</th>
                                                <th>Phone</th>
                                                <th>Address</th>
                                                <th>Role(s)</th>
                                                <th colspan="2">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($datalist as $data)
                                            <tr>
                                                <td>{{ $data->id }}</td>
                                                <td>@if($data->profile_photo_path)
                                                        <img src="{{Storage::url($data->profile_photo_path)}}" height="36">
                                                @endif</td>
                                                <td>{{ $data->name }}</td>
                                                <td>{{ $data->email }}</td>
                                                <td>{{ $data->phone }}</td>
                                                <td>@if($data->Address ){{ $data->Address }}@endif</td>
                                                <td>
                                                  @foreach($data->roles as $dat)
                                                        {{ $dat->name}}<br>
                                                  @endforeach
                                                      <a href="{{route('admin_user_roles',['id'=>$data->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=800,height=600') "><i class="fas fa-plus-circle"></i></a>

                                                </td>
                                                <td>
                                                </td>
                                                <td colspan="2" style="text-align:center;">
                                                    <a href="{{route('admin_user_edit',['id'=>$data->id])}}" ><i style="color:green" class="fa fa-edit"></i></a>
                                                 &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                 <a href="{{route('admin_user_delete',['id'=>$data->id])}}" onclick="return confirm('Are you sure to delete this record?') ">
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
      <script src="{{ asset('assets/admin')}}/assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('assets/admin')}}/dist/js/pages/datatable/datatable-basic.init.js"></script>
@endsection
