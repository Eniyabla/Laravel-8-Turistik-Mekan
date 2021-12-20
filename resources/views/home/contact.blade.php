@php
    use App\Http\Controllers\HomeController;$setting=HomeController::getsetting();
@endphp
@extends('layouts._blank')

@section('title', 'CONTACT US')
@section('content')
    <strong>CONTACT US </strong><br>
    @if(!Empty($setting->contact)) {!!($setting->contact )!!} @endif
    <br>
@endsection
