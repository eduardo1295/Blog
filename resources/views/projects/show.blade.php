@extends('layout')

@section('title',$project->title)

@section('content')
    <h1>{{ $project->title }}</h1>
    @auth
        <a href="{{ route('portafolio.edit',$project )  }}">Editar</a>
        @include('parcials.session-status')
        <form action="{{ route('portafolio.destroy',$project )  }}" method="POST">
            @csrf
            @method('DELETE')
            <button>Eliminar</button>
        </form>    
    @endauth
    
    <p>{{$project->description }}</p>
    <p>{{$project->created_at->diffForHumans() }}</p>
@endsection

{{ $project}}