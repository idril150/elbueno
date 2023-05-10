@extends('layouts.plantilla')

@section('title', 'Encuestas')

@section('content')
    <h1>listado de formularios</h1>
    <a href="{{route('encuestas.create')}}">crear encuesta</a>
    <ul>
        @foreach($encuestas as $encuesta)
    <h2>{{ $encuesta->name }}</h2>
    <ul>
        @foreach($encuesta->preguntas as $pregunta)
            <li>{{ $pregunta->texto }}</li>
        @endforeach
    </ul>
@endforeach
    </ul>
    {{$encuestas->links()}}
@endsection


    

