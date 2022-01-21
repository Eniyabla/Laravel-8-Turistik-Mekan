@extends('layouts.master')
@php
    use App\Http\Controllers\HomeController;$setting=HomeController::getsetting();
@endphp
@section('title', 'References')
@section('content')
  <div class="breadcrumb-wrap">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item active">References</li>
            </ul>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10">
                @if(!Empty($setting->references)) {!!($setting->references )!!} @endif
                <br>
            </div>
            <div class="col-md-1">
            </div>
        </div>

        <br>
        <br>
        <br>
@endsection
