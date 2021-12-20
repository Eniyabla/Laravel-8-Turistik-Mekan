@extends('admin.layouts.master')
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
                                            <tr>
                                                <th># Id</th>
                                                <th>Catgory</th>
                                                <th>Title</th>
                                                <th>Country</th>
                                                <th>City</th>
                                                <th>Image</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($datalist as $data)
                                            <tr>
                                                <td>{{ $data->id }}</td>
                                                <td>{{ App\Http\Controllers\Admin\CategoryController::getParentsTree($data->category,$data->category->title)}}</td>
                                                <td>{{ $data->title }}</td>
                                                <td>{{ $data->country }}</td>
                                                <td>{{ $data->city }}</td>
                                                <td>
                                                    @if($data->image)
                                                    <img src="{{Storage::url($data->image)}}" height="36">
                                                    @endif
                                                </td>
                                                <td>{{ $data->status }}</td>
                                                <td colspan="2" style="text-align:center;">
                                                <a href="{{route('admin_product_edit',['id'=>$data->id])}}" >
                                                      <img rel="icon"  width="20px" src="{{ asset('assets')}}/admin/images/edit.png">
                                                 </a>
                                                 &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                 <a href="{{route('admin_product_delete',['id'=>$data->id])}}" onclick="return confirm('Are you sure to delete this record?') ">
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
<script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript-->
    <script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="../dist/js/app-style-switcher.js"></script>
    <script src="../dist/js/feather.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <!-- themejs -->
    <!--Menu sidebar -->
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js"></script>
    <!--This page plugins -->
    <script src="../assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../dist/js/pages/datatable/datatable-basic.init.js"></script>
@endsection
