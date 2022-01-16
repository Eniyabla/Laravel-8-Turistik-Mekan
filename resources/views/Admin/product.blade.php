@extends('admin.master')
@section('title', 'TUR-MEK | Product List')
@section('content')
@section('header')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
@endsection
<div class="container-fluid">

<h3 class="card-title">Product List</h3>
<a href="{{route('admin_product_create')}}"><button style="width:20%;" type="button" class="btn btn-block btn-primary">Add Product</button></a>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr style="width: 80%">
                                                <th># Id</th>
                                                <th>Catgory</th>
                                                <th style="width: 20px;">Title</th>
                                                <th>Country</th>
                                                <th>City</th>
                                                <th>Image</th>
                                                <th>Galery</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($datalist as $dat)
                                            <tr>
                                                <td>{{ $dat->id }}</td>
                                                <td>{{ App\Http\Controllers\Admin\CategoryController::getParentsTree($data->category,$data->category->title)}}</td>

                                                <td style="width: 20px;">{{ $dat->title }} </td>
                                                <td>{{ $dat->country }}</td>
                                                <td>{{ $dat->city }}</td>
                                                <td>
                                                    @if($dat->image)
                                                    <img src="{{Storage::url($dat->image)}}" height="36">
                                                    @endif
                                                </td>
                                                <td style="justify-content:center"><a href="{{route('admin_image_add',['product_id'=>$dat->id])}}"><i class="fas fa-images"></i></a></td>
                                                <td>{{ $dat->status }}</td>
                                                <td colspan="2" style="text-align:center;">
                                                <a href="{{route('admin_product_edit',['id'=>$dat->id])}}" >
                                                      <img rel="icon"  width="20px" src="{{ asset('assets')}}/admin/images/edit.png">
                                                 </a>
                                                 &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                 <a href="{{route('admin_product_delete',['id'=>$dat->id])}}" onclick="return confirm('Are you sure to delete this record?') ">
                                                      <img rel="icon"  width="20px" src="{{ asset('assets')}}/admin/images/del.png">
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
