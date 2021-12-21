@php
    use App\Http\Controllers\HomeController;$setting=HomeController::getsetting();
@endphp
@extends('layouts.master')

@section('title', 'CONTACT US')
@section('content')
    <strong> </strong><br>

    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">

            </div>
            <div class="col-md-6 ">
                <div class="contact-form">
                    CONTACT US
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Your Name">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" placeholder="Your Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="5" placeholder="Message" style="margin-top: 0px; margin-bottom: 15px; height: 106px;"></textarea>
                        </div>
                        <div><button class="btn" type="submit">Send Message</button></div>
                        <br>
                    </form>
                </div>
            </div>
            <div class="col-lg-12">

            </div>
        </div>
    </div>
@endsection
