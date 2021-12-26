@extends('admin.master')
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
                    <h3 class="card-title">Edit User</h3>
                    <form action="{{route('admin_user_update',['id'=>$data->id])}}" method="post">
                        @csrf
                        <div class="form-body">
                            <div class="col-md-3">
                                <label for="Select1"></label>
                                @if($data->image)
                                    <img style="border-radius: 100%;" src="{{Storage::url($data->profile_photo_path)}}"height="36">
                                @endif
                            </div>
                        </div>
                        <div class="form-body">

                            <div class="col-md-12">
                                <label>Name </label>
                                <div class="form-group">
                                    <input  value="{{ $data->name }}" name="name" type="text" class="form-control">
                                </div>
                            </div>

                        </div>
                        <div class="form-body">

                            <div class="col-md-12">
                                <label>Email </label>
                                <div class="form-group">
                                    <input value="{{ $data->email }}" name="email" type="text" class="form-control">
                                </div>
                            </div>

                        </div>
                        <div class="form-body">

                            <div class="col-md-12">
                                <label>Phone </label>
                                <div class="form-group">
                                    <input value="{{ $data->phone }}" name="phone" type="text" class="form-control">
                                </div>
                            </div>

                        </div>
                        <div class="form-body">

<div class="col-md-12">
    <label>Address </label>
    <div class="form-group">
        <input value="{{ $data->address }}" name="address" type="text" class="form-control">
    </div>
</div>


                        <div class="form-actions">
                            <div class="text-right">
                                <button type="submit" class="btn btn-info">Edit Product</button>
                            </div>
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
