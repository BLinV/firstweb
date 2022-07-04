@extends('layout.layout')
@section('title','Inicio')
@section('content')
<h2>Inicio</h2>
    @auth
        {{ auth()->user()->name }}
    @endauth
@endsection