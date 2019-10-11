@extends('layout')

@section('titulo', $proyect->titulo)

@section('contenido')
   <h1> Mi {{ $proyect->titulo }}</h1> 
    <p>{{ $proyect->descripcion }}</p>
    <small>{{ $proyect->created_at->diffForHumans()}}</small>
    
    <hr/>

    <button><a href=" {{ route('proyects.editar', $proyect) }}">Editar</a></button>
    <button><a href=" {{ route('proyects.index') }}"> Regresar</a></button>
@endsection