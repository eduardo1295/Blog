@extends('layout')

@section('title','Portafolio')
    


@section('content')
    <h1>Crear Nuevo Proyecto</h1>
    
    @include('parcials.session-status')
    
    @include('parcials.validation-errors')

    <form action="{{ route('portafolio.store' ) }}" method="POST">
        
        @include('projects._form',['btnText' => 'Guardar'])
        
    </form>
    
@endsection