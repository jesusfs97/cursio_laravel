@extends('layout')

@section('titulo','Portafolio')

@section('contenido')
    <h1>Portafolio</h1>
    
    <a href="{{ route('proyects.crear')}}">Crear Proyecto</a>
    <ul>
        @forelse($Proyectos as $proyecto )
            <li> <a href=" {{ route('proyects.ver' , $proyecto) }} "> {{ $proyecto->titulo }} </a></li>
            <small>{{ $proyecto->descripcion }} </small>
            <hr />
            
        @empty
            
            <li> No hay Proyectos por mostrar</li>
            
        @endforelse()
            
    </ul>
@endsection()