@extends('layouts.master')
@section('header')

@endsection
@section('title',$setting->title )
@section('description', $setting->description)
@section('keywords',$setting->keywords )
@section('location', $setting->location)
@endsection
@section('content')

    @include('layouts._Hcontainer')
@endsection
