@extends('admin.master')
@section('title', 'TUR-MEK | faq List')
@section('content')
@section('header')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection
<div class="container-fluid">
    @include('home.message')

    <h3 class="card-title">faq List</h3>
    <a href="{{route('admin_faq_create')}}"><button style="width:20%;" type="button" class="btn btn-block btn-primary">Add faq</button></a>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered no-wrap">
                            <thead>
                            <tr>
                                <th># Id</th>
                                <th># Position</th>
                                <th>Question</th>
                                <th>Answer</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($datalist as $data)
                                <tr>
                                    <td>{{ $data->id }}</td>
                                    <td>{{ $data->position }}</td>
                                    <td>{{ $data->question }}</td>
                                    <td style="width: auto;height: auto;">{!! $data->answer  !!}</td>
                                    <td>{{ $data->status }}</td>
                                    <td colspan="2" style="text-align:center;">
                                        <a href="{{route('admin_faq_edit',['id'=>$data->id])}}" >
                                            <span style="color:darkgreen"><i class="fa fa-edit" ></i></span>
                                        </a>
                                        &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="{{route('admin_faq_delete',['id'=>$data->id])}}" onclick="return confirm('Are you sure to delete this faq?') ">
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
    </div>

    @endsection
    @section('footer')
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
        <script src="{{ asset('assets/admin')}}/dist/js/pages/datatable/datatable-basic.init.js"></script>
@endsection
