@extends('admin.master')
@section('title', 'TUR-MEK | Edit Category')
@section('content')
@section('header')
@endsection
<div class="container-fluid">

   <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Edit Category Form</h3>
                                <form action="{{route('admin_category_update',['id'=>$data->id])}}" method="post">
                                    @csrf
                                <div class="form-body">

                                            <div class="col-md-12">
                                            <label for="Select1">Parent</label>

                                        <select class="form-control" id="Select1" name="parent_id">
                                            <option value="{{ $data->parent_id}}" selected="selected">Parent Category</option>
                                            @foreach ($datalist as $dat)
                                            <option value="{{ $dat->id}}" @if ( $dat->id= $dat->parent_id) selected="selected" @endif >{{ App\Http\Controllers\Admin\CategoryController::getParentsTree($dat,$dat->title)}}</option>
                                            @endforeach
                                        </select>

                                            </div>

                                        </div>
                                        <div class="form-body">

                                            <div class="col-md-12">
                                            <label>Title </label>
                                                <div class="form-group">
                                                    <input value="{{ $data->title}}" name="title" type="text" class="form-control">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-body">

                                            <div class="col-md-12">
                                            <label>Keywords </label>
                                                <div class="form-group">
                                                    <input value="{{ $data->keywords}}" name="keywords" type="text" class="form-control">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-body">

                                            <div class="col-md-12">
                                            <label>Description </label>
                                                <div class="form-group">
                                                    <input value="{{ $data->description}}" name="description" type="text" class="form-control">
                                                </div>
                                            </div>

                                        </div>
                                    <div class="form-body">

                                    <div class="col-md-12">
                                            <label for="Select2">status</label>

                                        <select class="form-control" id="Select2" name="status">
                                        <option value="{{ $data->status}}">{{ $data->status}}</option>
                                            <option value="false" >False</option>
                                            <option value="true">True</option>
                                        </select>

                                            </div>

                                        </div>
                                    <div class="form-body">

                                            <div class="col-md-12">
                                            <label>Slug </label>
                                                <div class="form-group">
                                                    <input value="{{ $data->slug}}" name="slug" type="text" class="form-control">
                                                </div>
                                            </div>

                                        </div>
                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-info">Edit Category</button>
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
