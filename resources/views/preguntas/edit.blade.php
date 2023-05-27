@extends('layouts.plantilla')

@section('title', 'edit')

@section('content')
    <h1>en esta pagina se puede editar un formulario</h1>
    <a href="{{route('preguntas.show',$pregunta->id)}}"><-- volver a la pregunta</a>
    <br>
    <form action="{{route('preguntas.update', $pregunta)}}" method="post">
        @csrf
        @method('put')
        <label>
            Nombre:
            <input type="text" name="texto" value="{{old('texto',$pregunta->texto)}}">
        </label>
       
        <br>
        <label>
            tipo abierta:
            <input type="checkbox" name="tipo" value="1">
        </label>
        <br>
        <label>
            tipo cerrada:
            <input type="checkbox" name="tipo" value="0">
        </label>
        <br>
        <label>
            <input type="hidden" name="estado" value="1">
        </label>

        <br>
        <button type="submit">actualizar formulario</button>
    </form>
@endsection
