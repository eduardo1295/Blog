@extends('layout')

@section('title','Portafolio')
    


@section('content')
    <h1>Crear Nuevo Proyecto</h1>
    
    <form action="{{ route('portafolio.store' ) }}" method="POST">
        @csrf
        <label for="">
            Titulo del proyecto <br>
            <input type="text" name="title" id="title">
        </label>
         <br>
        <label for="">
            URL del proyecto <br>
            <input type="text" name="url" id="url">
        </label>
        <br>
        <label for="">
            Descripcion del proyecto <br>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
        </label>

        <button>Guardar</button>
    </form>
    
@endsection