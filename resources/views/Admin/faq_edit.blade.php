@extends('admin.master')
@section('title', 'TUR-MEK | Edit Faq')
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
                        <h3 class="card-title">Edit Faq</h3>
                        <form action="{{route('admin_faq_update',['id'=>$data->id])}}" method="post">
                            @csrf
                            <div class="form-body">

                                <div class="col-md-12">
                                    <label>Position </label>
                                    <div class="form-group">
                                        <input  value="{{ $data->position }}" name="position" type="number" class="form-control">
                                    </div>
                                </div>

                            </div>
                            <div class="form-body">

                                <div class="col-md-12">
                                    <label>Question </label>
                                    <div class="form-group">
                                        <input value="{{ $data->question }}" name="question" type="text" class="form-control">
                                    </div>
                                </div>

                            </div><div class="form-body">

                                <div class="col-md-12">
                                    <label>Answer </label>
                                    <div class="form-group">
                                        <textarea  name="answer"  id="summernote" class="form-control" >{{ $data->answer }}</textarea>
                                        <script>
                                            $(document).ready(function() {
                                                $('#summernote').summernote();
                                            });
                                        </script>
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

                                        <button type="submit" class="btn btn-info">Edit Faq</button>
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
