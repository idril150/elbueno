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
        <label>
            <input type="hidden" name="estado" value="1">
        </label>
        <br>
        <label >
            Area
            <input type="text" name="carrera" value="{{old('carrera')}}">
        </label>
        <br>
        <button type="submit">enviar formulario</button>
    </form>
@endsection
