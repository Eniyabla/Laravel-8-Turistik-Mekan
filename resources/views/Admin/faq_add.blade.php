@extends('admin.master')
@section('title', 'TUR-MEK | Add faq')
@section('header')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

@endsection
@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Add faq</h3>
                        <form action="{{route('admin_faq_store')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-body">

                                <div class="col-md-12">
                                    <label>Position </label>
                                    <div class="form-group">
                                        <input name="position"  min="0"  type="number" class="form-control">
                                    </div>
                                </div>

                            </div>
                            <div class="form-body">

                                <div class="col-md-12">
                                    <label>Question </label>
                                    <div class="form-group">
                                        <input name="question" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-body">

                                <div class="col-md-12">
                                    <label>Answer </label>
                                    <div class="form-group">
                                        <textarea name="answer"  class="form-control" id="summernote" ></textarea>
                                        <script>
                                            $(document).ready(function() {
                                                $('#summernote').summernote();
                                            });
                                        </script>
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

                                <div class="form-actions">
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-info">Add faq</button>
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

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <script src="{{ asset('assets/admin')}}/dist/js/pages/datatable/datatable-basic.init.js"></script>
@endsection
