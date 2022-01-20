@extends('layouts.master')
@php
    use App\Http\Controllers\HomeController;$setting=HomeController::getsetting();
@endphp
@section('title', 'References')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                @if(!Empty($setting->references)) {!!($setting->references )!!} @endif
                <br>
            </div>
            <div class="col-md-2">
            </div>
        </div>

        <br>
        <br>
        <br>
@endsection
