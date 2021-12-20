@extends('admin.layouts.master')
@section('title', 'TUR-MEK | Add Image')
@section('header')

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="../assets/admin/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="../assets/admin/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets/admin/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="../assets/admin/dist/css/style.min.css" rel="stylesheet">
    <link href="../assets/admin/dist/css/style.css" rel="stylesheet">
@endsection
@section('content')
    <div class="container-fluid">
        <h3 class="card-title">Add Image</h3>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Add Image to:<em style="color: red;">{{$data->title}}</em></h3>
                        <form action="{{route('admin_image_store', ['product_id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">

                                <div class="col-md-12">
                                    <label>Title </label>
                                    <div class="form-group">
                                        <input name="title" type="text" class="form-control">
                                    </div>
                                </div>

                            </div>
                            <div class="form-body">

                                <div class="col-md-12">
                                    <label>image </label>
                                    <div class="form-group">
                                        <input name="image" type="file" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <div class="text-right">
                                    <button type="submit" class="btn btn-info">Add Image</button>
                                </div>
                            </div>
                        </form>
                        <br>
                        <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($images as $img)
                                <tr>
                                    <td>{{$img->id}}</td>
                                    <td>{{$img->title}}</td>
                                    <td>
                                        @if($img->image)
                                            <img src="{{Storage::url($img->image)}}" style="height: 30px" alt="">
                                        @endif
                                    </td>
                                    <td><a href="{{route('admin_image_delete', ['id'=> $img->id,'product_id'=>$data->id])}}" onclick="return confirm('Are You Sure to delete this image?')" class=""><i class="fas fa-trash"></i></a></td>
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

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@endsection
