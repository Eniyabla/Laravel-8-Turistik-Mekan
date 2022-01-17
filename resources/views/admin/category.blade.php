@extends('admin.master')
@section('title', 'TUR-MEK | Categories List')

@section('header')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
@endsection
@section('content')
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
                                <th>Parent_id</th>
                                <th>Category</th>
                                <th>Title</th>
                                <th>Status</th>
                                <th>Actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($datalist as $data)
                                <tr>
                                    <td>{{ $data->id }}</td>
                                    <td>{{ $data->parent_id }}</td>
                                    <td>{{ App\Http\Controllers\Admin\CategoryController::getParentsTree($data,$data->title)}}</td>

                                    <td>{{ $data->title }}</td>
                                    <td>{{ $data->status }}</td>
                                    <td colspan="2" style="text-align:center;">
                                        <a href="{{route('admin_category_edit',['id'=>$data->id])}}" >
                                            <span style="color:darkgreen"><i class="fa fa-edit" ></i></span>
                                        </a>
                                        &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="{{route('admin_category_delete',['id'=>$data->id])}}" onclick="return confirm('Are you sure to delete this record?') ">
                                            <span style="color: red;"><i class="fa fa-trash" ></i></span>
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
