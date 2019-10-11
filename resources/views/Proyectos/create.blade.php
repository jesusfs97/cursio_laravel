@extends('layout')

@section('titulo','Crear proyecto')

@section('contenido')
    <h1>Agregar un nuevo proyecto</h1>

    @if ($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li> {{ $error }}</li>
            @endforeach
        </ul>
    @endif    

        <form method="POST" action=" {{ route('proyects.guardar') }}">
            @csrf
            <label for="titulo">
                Titulo del proyecto<br />
                <input type="text" name="titulo" id="titulo" >

            </label>
            <br />
            <label for="descripcion">
                Descripcion<br />
                <textarea name="descripcion" id="descripcion"></textarea>

            </label>
            <br />
            <label for="url">
                Url<br />
                <input type="text" name="url" id="url" >

            </label>
            <br />
            <button> Añadir</button>
            <button><a href=" {{ route('proyects.index') }}"> Regresar</a></button>
        </form>

@endsection()