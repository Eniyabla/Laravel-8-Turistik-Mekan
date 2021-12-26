@extends('admin.master')
@section('title', 'TUR-MEK | Add Category')
@section('content')
@section('header')
@endsection
<div class="container-fluid">

   <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Add Category Form</h3>
                                <form action="{{route('admin_category_create')}}">
                                    @csrf
                                <div class="form-body">

                                            <div class="col-md-12">
                                            <label for="Select1">Parent</label>

                                        <select class="form-control" id="Select1" name="parent_id">
                                            <option value="0" selected="selected">Parent Category</option>
                                            @foreach ($datalist as $data)
                                            <option value="{{ $data->id}}">{{ App\Http\Controllers\Admin\CategoryController::getParentsTree($data,$data->title)}}</option>
                                            @endforeach
                                        </select>

                                            </div>

                                        </div>
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
                                            <label>Keywords </label>
                                                <div class="form-group">
                                                    <input name="keywords" type="text" class="form-control">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-body">

                                            <div class="col-md-12">
                                            <label>Description </label>
                                                <div class="form-group">
                                                    <input name="description" type="text" class="form-control">
                                                </div>
                                            </div>

                                        </div>
                                    <div class="form-body">

                                    <div class="col-md-12">
                                            <label for="Select2">status</label>

                                        <select class="form-control" id="Select2" name="status">
                                            <option value="false" >False</option>s
                                            <option value="true">True</option>
                                        </select>

                                            </div>

                                        </div>
                                    <div class="form-body">

                                            <div class="col-md-12">
                                            <label>Slug </label>
                                                <div class="form-group">
                                                    <input name="slug" type="text" class="form-control">
                                                </div>
                                            </div>

                                        </div>
                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-info">Add Category</button>
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
