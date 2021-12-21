@php
    use App\Http\Controllers\HomeController;$setting=HomeController::getsetting();
@endphp
@extends('layouts._blank')
@section('title',$setting->title )
@section('description', $setting->description)
@section('keywords',$setting->keywords )
@section('location', $setting->location)
@section('menu')
    <div class="col-md-2">
        <nav class="navbar bg-light">
            <ul class="navbar-nav" style="margin-top: 5px;">
                <li class="nav-item">
                    <a class="nav-link" href="#">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">***********</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Notifications</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Whishlist</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Logout</a>
                </li>
            </ul>
        </nav>
    </div>
@endsection
@section('contnent'))
    @include('profile.show')
@endsection

