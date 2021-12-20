@php
    use App\Http\Controllers\HomeController;$setting=HomeController::getsetting();
@endphp
@extends('layouts._blank')

@section('title', 'References')
@section('content')
    <strong>References </strong><br>
    @if(!Empty($setting->references)) {!!($setting->references )!!} @endif
    <br>
@endsection
