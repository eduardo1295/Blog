@extends('layout')

@section('title','Portafolio')
    


@section('content')
    <h1>Editar Proyecto</h1>
    
    @include('parcials.session-status')
    
    @include('parcials.validation-errors')

    <form action="{{ route('portafolio.update',$project) }}" method="POST">
        @method('PATCH')
        @include('projects._form',['btnText' => 'Actualizar'])
    </form>
    
@endsection`