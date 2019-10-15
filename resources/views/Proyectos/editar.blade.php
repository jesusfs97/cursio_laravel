@extends('layout')

@section('titulo','Crear proyecto')

@section('contenido')
    <h1>Editar {{ $proyecto->titulo }}</h1>

    @include('partials.validationErrors')

        <form method="POST" action=" {{ route('proyects.actualizar', $proyecto) }}">
            @csrf
             @method('PATCH') {{-- lo que hace es <input type="hidden" name="_method" value="PATCH"> --}}
            <label for="titulo">
                Titulo del proyecto<br />
                <input type="text" name="titulo" id="titulo" value="{{ old('titulo' , $proyecto->titulo ) }}" >

            </label>
            <br />
            <label for="descripcion">   
                Descripcion<br />
                <textarea name="descripcion" id="descripcion">{{ old( 'descripcion' , $proyecto->descripcion ) }}</textarea>

            </label>
            <br />
            <label for="url">
                Url<br />
                <input type="text" name="url" id="url" value="{{ old( 'url' , $proyecto->url ) }}" >

            </label>
            <br />
            <button>Guardar</button>
            <button><a href=" {{ route('proyects.index') }}"> Cancelar</a></button>
        </form>

@endsection()