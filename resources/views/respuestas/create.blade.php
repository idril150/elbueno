@extends('layouts.plantilla')

@section('title', 'create')

@section('content')
    <h1>en esta pagina se puede crear un formulario</h1>
    <a href="{{route('encuestas.index')}}"><-- volver a las encuestas</a>
    <br>
    <form action="{{route('encuestas.store')}}" method="POST">
        @csrf
        <label>
            Nombre:
            <input type="text" name="name" value="{{old('name')}}">
        </label>

        @error('name')
            <br>
            <small>{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            periodo:
            <input type="text" name="periodo" value="{{old('periodo')}}">
        </label>
        @error('periodo')
            <br>
            <small>{{$message}}</small>
            <br>
        @enderror
        <br>
        <label>
            estado:
            <input type="checkbox" name="estado" value="1">
        </label>
        <br>
        <label>
            estado:
            <input type="checkbox" name="estado" value="0">
        </label>
        <br>
        <a href="{{route('respuestas.index')}}">agregar respuesta</a>
        <button type="submit">enviar formulario</button>
    </form>
@endsection
