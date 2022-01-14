<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
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
                        <table border="1px" >

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
                                <th>Role(s)</th>
                                <th>Action(s)</th>
                            </tr>
                            @foreach($data->roles as $dat)
                                <tr>
                                    <td>{{$dat->name}}</td>
                                       <td>   <a href="{{route('admin_user_role_delete',['userid'=>$data->id,'roleid'=>$dat->id])}}" onclick="return confirm('Are you sure to delete this record?') ">
                                             <i style="color: red;" class="fa-trash-alt"></i>delete
                                          </a>
                                        </td>
                                </tr>
                                    @endforeach

                        </table>
                    </div>
                    <div class="col-12">

                        <div class="col-12">
                            <label>Add Role</label>
                                <div class="card">
                                    <div class="card-body">
                                        <form  action="{{route('admin_user_role_store',['id'=>$dat->id])}}" method="post">
                                        @csrf
                                            <label for="role_id">Choose a role:</label>
                                            <select name="role_id">
                                            @foreach($datalist as $dat)
                                               <option  value="{{$dat->id}}"> {{ $dat->name}}</option>
                                             @endforeach
                                            </select>
                                            <button type="submit" class="btn btn-primary">Add role</button>
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

