@extends('layout')

@section('title','Inicio')

@section('content')
    <h1>Home</h1>
    @auth
        {{auth()->user()->name }}    
    @endauth
    
@endsection