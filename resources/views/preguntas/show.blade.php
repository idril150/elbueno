@extends('layouts.plantilla')

@section('title', 'Pregunta ' . $pregunta->id)

@section('content')

    <a href="{{route('preguntas.index')}}"><-- volver a las preguntas</a>
    <h1>{{$pregunta->texto}}</h1>
    <p><strong>tipo: </strong>@php
        if ($pregunta->tipo==1){
            echo "abierto";
        }
        else {
            echo "cerrado";
        }
    @endphp</p>
    
    <br>
    <a href="{{route('preguntas.edit',$pregunta)}}">Editar pregunta</a>

    <form action="{{route('preguntas.destroy', $pregunta)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>

@endsection