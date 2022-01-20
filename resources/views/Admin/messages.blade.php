@extends('admin.master')
@section('title', 'TUR-MEK | Message List')
@section('content')
@section('header')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
@endsection
<div class="container-fluid">

    <h3 class="card-title">Message List</h3>
    <a href=""><button style="width:20%;" type="button" class="btn btn-block btn-primary">Add message</button></a>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @include('home.message')
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered no-wrap">
                            <thead>
                            <tr style="width: 80%">
                                <th># Id</th>
                                <th>Name</th>
                                <th >Email</th>
                                <th>Subject</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($datalist as $data)
                                <tr>
                                    <td>{{ $data->id }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->email}}</td>
                                    <td>{{ $data->subject }}</td>
                                    <td>{{ $data->status}}</td>
                                    <td colspan="2" style="text-align:center;">
                                        <a href="{{route('admin_message_edit',['id'=>$data->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=800,height=600') " >
                                           <span style="color:seagreen;"><i class="fas fa-edit"></i></span>
                                        </a>
                                        &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="{{route('admin_message_delete',['id'=>$data->id])}}" onclick="return confirm('Are you sure to delete this message?') ">
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

    @endsection
    @section('footer')

        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
        <script src="{{ asset('assets/admin')}}/dist/js/pages/datatable/datatable-basic.init.js"></script>

@endsection

