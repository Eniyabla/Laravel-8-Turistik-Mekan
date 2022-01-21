@php
    use App\Http\Controllers\HomeController;$setting=HomeController::getsetting();
@endphp
@extends('layouts.master')

@section('title', 'About Us')
@section('content')
  <div class="breadcrumb-wrap">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item active">About  Us</li>
            </ul>
        </div>
    </div>
    <div class="my-account">
        <div class="container-fluid">
    @if(!Empty($setting->aboutus)){!!$setting->aboutus!!}@endif<br><br><br>
</div>
</div>
@endsection
