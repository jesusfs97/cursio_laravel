@extends('layout')

@section('titulo','contacto')

@section('contenido')
    <h1>Contacto</h1>

    <form  method="POST" action=" {{ route('contacto') }}">

         @csrf {{-- esto sirve para generar un token y proteger la pagina de ataque xss --}}
        
        <input type="text" name="Nombre" value="{{ old('Nombre') }}" placeholder="Nombre"> <br />
        {!! $errors->first('Nombre','<small>:message</small><br />' )!!}
        
        <input type="text" name="Correo" value="{{old('Correo')}}" placeholder="Email"> <br />
        {!! $errors->first('Correo','<small>:message</small><br />' )!!}
        
        <input type="text" name="Asunto" value="{{ old('Asunto') }}" placeholder="Asunto"> <br />
        {!! $errors->first('Asunto','<small>:message</small><br />' )!!}
        
        <textarea name="contenido" placeholder="Mensaje"> {{old('contenido')}}</textarea> <br />
        {!! $errors->first('contenido','<small>:message</small><br />' )!!} 
        
        <button >Enviar</button>

    </form>
@endsection()