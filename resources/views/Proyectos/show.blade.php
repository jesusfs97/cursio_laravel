@extends('layout')

@section('titulo', $proyect->titulo)

@section('contenido')
   <h1> Mi {{ $proyect->titulo }}</h1> 
    <p>{{ $proyect->descripcion }}</p>
    <small>{{ $proyect->created_at->diffForHumans()}}</small>
    
    <hr/>
    @auth
        <button><a href=" {{ route('proyects.editar', $proyect) }}">Editar</a></button>
        
        <form action="{{ route('proyects.destruir' , $proyect ) }}" method="POST" >
            @csrf  
            @method('DELETE')
            <button> Eliminar </button>
        </form>
    @endauth
    <button><a href=" {{ route('proyects.index') }}"> Regresar</a></button>
@endsection