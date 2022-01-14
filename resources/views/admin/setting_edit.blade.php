@extends('admin.master')
@section('title', 'TUR-MEK | Setting')
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
                    <form role="form" action="{{route('admin_setting_update')}}" method="post">
                        @csrf
<div class="col-xl-12">
                                <h4 class="card-title mb-3">Edit Setting</h4>
                                <ul class="nav nav-tabs mb-3">
                                    <li class="nav-item">
                                        <a href="#home" data-toggle="tab" aria-expanded="false" class="nav-link">
                                            <i class="mdi mdi-home-variant d-lg-none d-block mr-1"></i>
                                            <span class="d-none d-lg-block">General</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#profile" data-toggle="tab" aria-expanded="true" class="nav-link">
                                            <i class="mdi mdi-account-circle d-lg-none d-block mr-1"></i>
                                            <span class="d-none d-lg-block">SMTP Email</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#settings" data-toggle="tab" aria-expanded="false" class="nav-link">
                                            <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                                            <span class="d-none d-lg-block">Social Media</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#about" data-toggle="tab" aria-expanded="true" class="nav-link">
                                            <i class="mdi mdi-account-circle d-lg-none d-block mr-1"></i>
                                            <span class="d-none d-lg-block">About Us</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#contact" data-toggle="tab" aria-expanded="false" class="nav-link">
                                            <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                                            <span class="d-none d-lg-block">Contact Us Page</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#references" data-toggle="tab" aria-expanded="false" class="nav-link">
                                            <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                                            <span class="d-none d-lg-block">Refernces</span>
                                        </a>
                                    </li>
                                </ul>
<br>
<br>
                                <div class="tab-content">
                                    <div class="tab-pane" id="home">
                                    <!------------------------------General--------------------------------->

                        <div class="form-body">

<div class="col-md-12">
    <label>Id</label>
    <div class="form-group">
        <input readonly  value="{{ $data->id }}" name="id" type="text" class="form-control">
    </div>
</div>

</div>
<div class="form-body">

<div class="col-md-12">
    <label>Title </label>
    <div class="form-group">
        <input  value="{{ $data->title }}" name="title" type="text" class="form-control">
    </div>
</div>

</div>
<div class="form-body">

<div class="col-md-12">
    <label>Keywords </label>
    <div class="form-group">
        <input value="{{ $data->keywords }}" name="keywords" type="text" class="form-control">
    </div>
</div>

</div>
<div class="form-body">

<div class="col-md-12">
    <label>Description </label>
    <div class="form-group">
        <input value="{{ $data->description }}" name="description" type="text" class="form-control">
    </div>
</div>

</div>
<div class="form-body">

<div class="col-md-12">
<label>Company </label>
<div class="form-group">
<input value="{{ $data->company }}" name="company" type="text" class="form-control">
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
<label>Fax </label>
<div class="form-group">
<input value="{{ $data->fax }}" name="fax" type="text" class="form-control">
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
                                <label for="Select2">status</label>
                                <div class="form-group">
                                <select class="form-control" id="Select2" name="status">
                                <option value="{{ $data->status }}" >False</option>
                                    <option value="false" >False</option>
                                    <option value="true">True</option>
                                </select>
</div>
                            </div>

</div>

                                    <!-------------------------------end General----------------------------->




                                    </div>
<div class="tab-pane show" id="profile">
<!-----------------Smtp------------------->
<div class="form-body">

<div class="col-md-12">
    <label>Smtpserver </label>
    <div class="form-group">
        <input value="{{ $data->smtpserver }}" name="smtpserver" type="text" class="form-control">
    </div>
</div>

</div>

<div class="form-body">

<div class="col-md-12">
    <label>Smtpemail </label>
    <div class="form-group">
        <input value="{{ $data->smtpemail }}" name="smtpemail" type="text" class="form-control">
    </div>
</div>

</div>

<div class="form-body">

<div class="col-md-12">
    <label>Smtppassword </label>
    <div class="form-group">
        <input value="{{ $data->smtppassword }}" name="smtppassword" type="text" class="form-control">
    </div>
</div>

</div>

<div class="form-body">

<div class="col-md-12">
    <label>Smtpport </label>
    <div class="form-group">
        <input value="{{ $data->smtpport }}" name="smtpport" type="text" class="form-control">
    </div>
</div>

</div>
                                        <!---------------------------------------->

</div>

<div class="tab-pane show" id="settings">
<!-----------------Smtp------------------->

<div class="form-body">

<div class="col-md-12">
    <label>Facebook </label>
    <div class="form-group">
        <input value="{{ $data->facebook }}" name="facebook" type="text" class="form-control">
    </div>
</div>
</div>

<div class="form-body">

<div class="col-md-12">
    <label>Twitter </label>
    <div class="form-group">
        <input value="{{ $data->twitter }}" name="twitter" type="text" class="form-control">
    </div>
</div>
</div>

<div class="form-body">

<div class="col-md-12">
    <label>instagram </label>
    <div class="form-group">
        <input value="{{ $data->instagram }}" name="instagram" type="text" class="form-control">
    </div>
</div>

</div>

<div class="form-body">

<div class="col-md-12">
    <label>youtube </label>
    <div class="form-group">
        <input value="{{ $data->youtube }}" name="youtube" type="text" class="form-control">
    </div>
</div>

</div>
<div class="form-body">

<div class="col-md-12">
    <label>linkedin </label>
    <div class="form-group">
        <input value="{{ $data->linkedin }}" name="linkedin" type="text" class="form-control">
    </div>
</div>

</div>
</div>

<div class="tab-pane show" id="about">
<div class="form-body">
<div class="col-md-12">
    <label>About Us </label>
    <div class="form-group">
    <textarea name="aboutus" class="form-control" id="summernote1" class="form-control" >{{ $data->aboutus }}</textarea>
<script>
$(document).ready(function() {
  $('#summernote1').summernote()});
</script>
    </div>
</div>
</div>
</div>
<div class="tab-pane show" id="contact">
<div class="form-body">
<div class="col-md-12">
    <label>Contact Us </label>
    <div class="form-group">
    <textarea  name="contact" id="summernote2" class="form-control" >{{ $data->contact }}</textarea>
<script>
$(document).ready(function() {
  $('#summernote2').summernote();
});
</script>
    </div>
</div>
</div>
</div>
<div class="tab-pane show" id="references">
<div class="form-body">
<div class="col-md-12">
    <label>References </label>
    <div class="form-group">
    <textarea name="references" id="summernote3" class="form-control" >{{ $data->references }}</textarea>
<script>
$(document).ready(function() {
  $('#summernote3').summernote();
});
</script>
    </div>
</div>
</div>
</div>
                        <div class="form-actions">
                            <div class="text-right">
                                <button type="submit" class="btn btn-info">Edit Setting</button>
                            </div>
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
