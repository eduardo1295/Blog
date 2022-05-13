@extends('layout')

@section('title','Portafolio')
    


@section('content')
    <h1>Protafolio</h1>
    
    <a href="{{route('portafolio.create')}}">Crear Proyecto</a>
    <ul>
        {{-- @if (count($portafolio) >  0)
            @foreach ($portafolio as $portafolioItem)
                <li> {{$portafolioItem['title']}} </li>
            @endforeach    
        @else
            <li>No hay proyectos</li>
        @endif --}}
        
        @forelse ($projects as $portafolioItem)
            <li> 
                <a href="{{ route('portafolio.show', $portafolioItem ) }}">{{ $portafolioItem->title }}  <small> {{ $portafolioItem->description }}</small></a>
                
                
            </li>
        @empty
            <li>No hay proyectos</li>
        @endforelse
        {{$projects->links()}}
    </ul>
@endsection