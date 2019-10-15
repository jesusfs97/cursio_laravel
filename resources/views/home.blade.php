@extends('layout')

@section('titulo','home')


@section('contenido')
    <h1>Inicio</h1>

    @auth
        <h3>BIENVENIDO: {{ auth()->user()->name }} </h3>
    @endauth
@endsection()

