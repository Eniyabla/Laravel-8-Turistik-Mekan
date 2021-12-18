@extends('admin.layouts.master')
@section('title', 'TUR-MEK | Categories List')
@section('content')
@section('header')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
@endsection
<div class="container-fluid">

<h3 class="card-title">Categories List</h3>
<a href="{{route('admin_category_add')}}"><button style="width:20%;" type="button" class="btn btn-block btn-primary">Add Category</button></a>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                           
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th># Id</th>
                                                <th>Parent</th>
                                                <th>Title</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($datalist as $data)
                                            <tr>
                                                <td>{{ $data->id }}</td>
                                                <td>{{ $data->parent_id}}</td>
                                                <td>{{ $data->title }}</td>
                                                <td>{{ $data->status }}</td>
                                                <td colspan="2" style="text-align:center;">
                                                <a href="{{route('admin_category_edit',['id'=>$data->id])}}" >
                                                      <img rel="icon"  width="20px" src="{{ asset('assets')}}/admin/images/edit.png">
                                                 </a> 
                                                 &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                 <a href="{{route('admin_category_delete',['id'=>$data->id])}}" onclick="return confirm('Are you sure to delete this record?') ">
                                                      <img rel="icon"  width="20px" src="{{ asset('assets')}}/admin/images/del.png">
                                                    </a> 
                                                </td>
                                                <!--td style="text-align:center;">
                                                
                                                 <a href="{{route('admin_category_delete',['id'=>$data->id])}}" onclick="return confirm('Are you sure to delete this record?') ">
                                                      <img rel="icon"  width="20px" src="{{ asset('assets')}}/admin/images/del.png">
                                                    </a> 

                                        </td-->
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
    <!--This page plugins -->
    <script src="../assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../dist/js/pages/datatable/datatable-basic.init.js"></script>
@endsection
