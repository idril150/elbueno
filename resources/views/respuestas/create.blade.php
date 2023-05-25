@extends('layouts.plantilla')

@section('title', 'create')

@section('content')
    <h1>en esta pagina se puede crear una respuesta</h1>
    <a href="{{route('respuestas.index')}}"><-- volver a las respuesta</a>
    <br>
    <form action="{{route('respuestas.store')}}" method="POST">
        @csrf
        <br>
        <label>
            texto:
            <input type="text" name="texto" value="{{old('texto')}}">
        </label>
        <input type="hidden" name="pregunta_id" value="{{ $pregunta_id }}">
        <br>
        <label>            
            <input type="hidden" name="estado" value="1">
        </label>
        {{-- <br>
        <label>
            estado inactiva:
            <input type="checkbox" name="estado" value="0">
        </label> --}}
        <br>

        <button type="submit">enviar formulario</button>
    </form>
    
@endsection
