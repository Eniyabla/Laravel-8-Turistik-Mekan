@extends('admin.layouts.master')
@section('title', 'TUR-MEK | Edit message')
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
                        <h3 class="card-title">Edit Message</h3>
                        @include('home.message')
                        <form action="{{route('admin_message_update',['id'=>$data->id])}}" method="post">
                            @csrf
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                <tr>
                                    <td># Id</td><td>{{ $data->id }}</td>
                                </tr>
                                <tr>
                                    <td>Name</td><td>{{ $data->name }}</td>
                                </tr>
                                <tr>
                                    <td>Email</td><td>{{ $data->email }}</td>
                                </tr>
                                <tr>
                                    <td>Phone</td><td>{{ $data->phone }}</td>
                                </tr>
                                <tr>
                                    <td>Message</td><td>{{ $data->message }}</td>
                                </tr>
                            </table>
                            </div>
                                     <label>Reply to {{$data->name }} </label>
                                        <div class="form-group">
                                            <textarea  name="note"  id="summernote" class="form-control" >{{ $data->note }}</textarea>
                                        </div>

                                             <div class="form-actions">
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-info">Reply</button>
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
@endsection
