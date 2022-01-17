@extends('admin.master')
@section('title', 'TUR-MEK | Add Image')
@section('header')

@endsection
@section('content')
    <div class="container-fluid">
        <h3 class="card-title">Add Image to :</h3>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        @if($data->image)
                            <img src="{{Storage::url($data->image)}}"style="display: block;margin-left: auto;margin-right: auto;width: 20%;" alt="">
                        @endif
                            <br><br>
                            <h6 style="color: red;text-align: center;" class="card-title">{{$data->title}}</h6>
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

                            <div class="form-body">
                                <div class="text-right">
                                    <button type="submit" class="btn btn-info">Add Image</button>
                                </div>
                            </div>
                        </form>
                        <br>
                        <table id="datatable-buttons" class="center table table-striped table-bordered">
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
                                    <td >
                                        @if($img->image)
                                            <img src="{{Storage::url($img->image)}}" style="display: block;margin-left: auto;margin-right: auto;width: 100px;" alt="">
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

@endsection
