@extends('admin.master')
@section('title', 'TUR-MEK | Edit User')
@section('header')

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
@endsection
@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('admin_user_update',['id'=>$data->id])}}" method="post">
                        @csrf
                        <div class="form-body">
                            @include('home.message')
                            <div class="col-md-3">
                                @if($data->profile_photo_path)
                                    <img style="border-radius: 100%;" src="{{Storage::url($data->profile_photo_path)}}"width="60" height="60;" >
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
                                <button type="submit" class="btn btn-info">Update User</button>
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
