@php
    use App\Http\Controllers\HomeController;$setting=HomeController::getsetting();
@endphp
@extends('layouts._blank')

@section('title', 'About Us')
@section('content')
    <strong>ABOUT US </strong><br>
    @if(!Empty($setting->aboutus)){{!!$setting->aboutus!!}}@endif<br>
@endsection
