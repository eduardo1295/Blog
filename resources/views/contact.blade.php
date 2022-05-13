@extends('layout')

@section('title','Contacto')

@section('content')
    <h1>{{__('Contact')}}</h1>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p></p>
        @endforeach
        
    @endif

    <form  method="POST" action="{{'contact'}}">
        @csrf
        <input type="text" name="name" id="" placeholder="nombre" value="{{old('name')}}">
        {!! $errors->first('name','<small>:message</small>') !!} <br>
        <input type="text" name="email" id="" placeholder="Email" value="{{old('email')}}">
        {{$errors->first('email')}} <br>
        <input  name="subject" id="" placeholder="Asunto" value="{{old('subject')}}">
        {{$errors->first('subject')}} <br>
        <textarea name="content" id="" cols="30" rows="10" placeholder="Mensaje....">{{old('content')}}</textarea>
        {{$errors->first('content')}} <br>
        <button type="submit">Enviar</button>
    </form>
@endsection