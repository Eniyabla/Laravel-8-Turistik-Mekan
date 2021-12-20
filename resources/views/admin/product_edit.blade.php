@extends('admin.layouts.master')
@section('title', 'TUR-MEK | Edit Product')
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

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Edit Product</h3>
                    <form action="{{route('admin_product_update',['id'=>$data->id])}}" method="post">
                        @csrf
                        <div class="form-body">

                            <div class="col-md-12">
                                <label for="Select1">Category</label>

                                <select class="form-control" id="Select1" name="category_id">
                                    <option value="{{ $data->category_id }}">{{ App\Http\Controllers\Admin\CategoryController::getParentsTree($data,$data->title)}}</option>
                                    @foreach ($datalist as $dat)
                                    <option value="{{ $dat->category_id }}">{{ App\Http\Controllers\Admin\CategoryController::getParentsTree($dat,$dat->title)}}</option>
                                    @endforeach
                                </select>

                            </div>

                        </div>
                        <div class="form-body">

                            <div class="col-md-12">
                                <label>Title </label>
                                <div class="form-group">
                                    <input  value="{{ $data->title }}" name="title" type="text" class="form-control">
                                </div>
                            </div>

                        </div>
                        <div class="form-body">

                            <div class="col-md-12">
                                <label>Keywords </label>
                                <div class="form-group">
                                    <input value="{{ $data->keywords }}" name="keywords" type="text" class="form-control">
                                </div>
                            </div>

                        </div>
                        <div class="form-body">

                            <div class="col-md-12">
                                <label>Description </label>
                                <div class="form-group">
                                    <input value="{{ $data->description }}" name="description" type="text" class="form-control">
                                </div>
                            </div>

                        </div>
                        <div class="form-body">

<div class="col-md-12">
    <label>Country </label>
    <div class="form-group">
        <input value="{{ $data->country }}" name="country" type="text" class="form-control">
    </div>
</div>

</div>

<div class="form-body">

<div class="col-md-12">
    <label>City </label>
    <div class="form-group">
        <input value="{{ $data->city }}" name="city" type="text" class="form-control">
    </div>
</div>

</div>
<div class="form-body">

<div class="col-md-12">
    <label>Location </label>
    <div class="form-group">
        <input value="{{ $data->location }}" name="location" type="text" class="form-control">
    </div>
</div>

</div>

<div class="form-body">



<div class="col-md-12">
    <label>Detail </label>
    <div class="form-group">
    <textarea value="{{ $data->detail }}" name="detail"  name="detail"  class="form-control" id="summernote" class="form-control" ></textarea>
        <script>
$(document).ready(function() {
  $('#summernote').summernote();
});
</script>
    </div>
</div>

    <div class="form-body">

        <div class="col-md-12">
            <label>image </label>
            <div class="form-group">
                <input value="{{ $data->image }}" name="image" type="file" class="form-control">
                @if($data->image)
                    <img src="{{($data->image)}}"height="36">
                @endif
            </div>
        </div>
    </div>
    <div class="form-body">

                            <div class="col-md-12">
                                <label for="Select2">status</label>

                                <select class="form-control" id="Select2" name="status">
                                <option value="{{ $data->status }}" >False</option>
                                    <option value="false" >False</option>
                                    <option value="true">True</option>
                                </select>

                            </div>

                        </div>
                        <div class="form-body">

                            <div class="col-md-12">
                                <label>Slug </label>
                                <div class="form-group">
                                    <input vaulue="{{ $data->slug }}" name="slug" type="text" class="form-control">
                                </div>
                            </div>

                        </div>
                        <div class="form-actions">
                            <div class="text-right">
                                <button type="submit" class="btn btn-info">Edit Product</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('footer')

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@endsection
