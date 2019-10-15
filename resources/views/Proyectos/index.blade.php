@extends('layout')

@section('titulo','Portafolio')

@section('contenido')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class=" mb-0 display-4">Portafolio</h1>
        @auth
            <a class="btn btn-primary" href="{{ route('proyects.crear')}}">Crear Proyecto</a>
        @endauth
    </div>

    <ul class="list-group">
        @forelse($Proyectos as $proyecto )
            <li class="list-group-item border-0 mb-3 ">
                <a class="d-flex justify-content-between align-items-center" href=" {{ route('proyects.ver' , $proyecto) }} "> 
                    <span class="text-secondary font-weight-bold">
                        {{ $proyecto->titulo }}
                    </span>

                    <span>
                        {{ $proyecto->created_at->format('d/m/Y') }}
                    </span>
                </a>
            </li>
            
            <hr />
            
        @empty
            
            <li class="list-group-item border-0 mb-3"> No hay Proyectos por mostrar</li>
            
        @endforelse()
            
    </ul>
</div>
@endsection()