@extends('layouts.plantilla')

@section('title', 'create')

@section('content')
    <h1>en esta pagina se puede crear un formulario</h1>
    <a href="{{route('preguntas.index')}}"><-- volver a las encuestas</a>
    <br>
    <form action="{{route('preguntas.store')}}" method="POST">
        @csrf
        <label>
            pregunta:
            <input type="text" name="texto" value="{{old('texto')}}">
        </label>

         
        <br>
        <label>
            cerrada:
            <input type="checkbox" name="tipo" value="1">
        </label>
        <br>
        <label>
            abierta:
            <input type="checkbox" name="tipo" value="0">
        </label>
        <br>

        <a href="{{route('preguntas.index')}}">agregar encuestas</a>
        <button type="submit">enviar formulario</button>
    </form>
@endsection
