@extends('layouts.plantilla')

@section('title', 'edit')

@section('content')
    <h1>en esta pagina se puede editar un formulario</h1>
    <a href="{{route('respuestas.show',$respuesta->id)}}"><-- volver a la respuesta</a>
    <br>
    <form action="{{route('respuestas.update', $respuesta)}}" method="post">
        @csrf
        @method('put')
        <br>
        <label>
            texto:
            <input type="text" name="texto" value="{{old('texto',$respuesta->texto)}}">
        </label>
       
        <br>
        <br>
        <label>
            <input type="hidden" name="estado" value="1">
        </label>
        
        <br>
        <button type="submit">actualizar formulario</button>
    </form>
@endsection
