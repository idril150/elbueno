@extends('layouts.plantilla')

@section('title', 'edit')

@section('content')
    <h1>en esta pagina se puede editar un formulario</h1>
    <a href="{{route('respuestas.show',$respuesta->id)}}"><-- volver a la respuesta</a>
    <br>
    <form action="{{route('respuestas.update', $respuesta)}}" method="post">
        @csrf
        @method('put')

        <label>
            inciso:
            <input type="text" name="inciso" value="{{old('inciso',$respuesta->inciso)}}">
        </label>
        <br>
        <label>
            texto:
            <input type="text" name="texto" value="{{old('texto',$respuesta->texto)}}">
        </label>
       
        <br>
        <br>
        <button type="submit">actualizar formulario</button>
    </form>
@endsection
