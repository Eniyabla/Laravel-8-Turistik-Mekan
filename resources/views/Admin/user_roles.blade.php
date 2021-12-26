@extends('admin.master')
@section('title', 'TUR-MEK | User List')
@section('content')
@section('header')
@section('header')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
@endsection
@section('content')
<div class="container-fluid">
  @include('home.message')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">

                        @if($data->profile_photo_path)
                            <img src="{{Storage::url($data->profile_photo_path)}}" style="border-radius: 100%;" height="60">
                        @endif
                        <table id="zero_config" class="table table-striped table-bordered no-wrap">

                            <tr>
                                <th># Id</th>
                                <td>{{ $data->id }}</td>
                            </tr>
                            <tr>
                                <th>Name</th>
                                 <td>{{ $data->name }}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{ $data->email }}</td>
                            </tr>
                            <tr>
                                <th>Roles</th>
                                <table>
                                @foreach($data->roles as $dat)
                                    <tr>
                                       <td>{{$dat->name}}</td>
                                        <td>
                                            <a href="{{route('admin_user_role_delete',['userid'=>$data->id,'roleid'=>$dat->id])}}" onclick="return confirm('Are you sure to delete this record?') ">
                                                <i style="color: red;" class="fa fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </table>
                            </tr>
                        </table>
                    </div>
                    <div class="col-12">

                        <div class="col-12">
                            <label>Add Role</label>
                                <div class="card">
                                    <div class="card-body">
                                        <form  action="{{route('admin_user_role_store',['id'=>$data->id])}}" method="post">
                                        @csrf
                                            <select name="roleid">
                                            @foreach($datalist as $dat)
                                               <option value="{{$dat->id}}"> {{ $dat->name}}</option>
                                                @endforeach
                                            </select>
                                            <button type="submit" class="btn-info"></button>
                                        </form>
                                    </div>
                                </div>


                                        <a href="{{route('admin_user_roles',['id'=>$data->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=800,height=600') "><i class="fas fa-plus-circle"></i></a>

                                    <td>
                                    </td>
                                    <td colspan="2" style="text-align:center;">
                                        <a href="{{route('admin_user_edit',['id'=>$data->id])}}" ><i style="color:green" class="fa fa-edit"></i></a>
                                        &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="{{route('admin_user_delete',['id'=>$data->id])}}" onclick="return confirm('Are you sure to delete this record?') ">
                                            <i style="color: red;" class="fa fa-trash-alt"></i>
                                        </a>
                                    </td>
                        </div>
                    </div>
                </div></div>
        </div>
    </div>
</div>

@endsection
