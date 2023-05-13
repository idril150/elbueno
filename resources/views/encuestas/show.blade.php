@extends('layouts.plantilla')

@section('title', 'Encuesta ' . $encuesta->name)

@section('content')
    <h1>bienvenido a la encuesta: {{$encuesta->name}}</h1>
    <a href="{{route('encuestas.index')}}"><-- volver a las encuestas</a>
    
    <p><strong>periodo: </strong>{{$encuesta->periodo}}</p>
    <p><strong>estado: </strong>@php
        if ($encuesta->estado==1){
            echo "activo";
        }
        else {
            echo "inactivo";
        }
    @endphp</p>
    
    <br>
    <a href="{{route('encuestas.edit',$encuesta)}}">Editar encuesta</a>

    <form action="{{route('encuestas.destroy', $encuesta)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>

        @foreach ($preguntas as $pregunta)
        <h4>{{ $pregunta->texto }}</h4>        
        <a href="{{route('preguntas.edit',$pregunta->id)}}">editar pregunta</a>
        <ul>
        @foreach ($pregunta->respuestas as $respuesta)
            <li>{{ $respuesta->texto }}</li>
            <a href="{{route('respuestas.edit',$respuesta->id)}}">editar respuesta</a>
        @endforeach 
        </ul>
        <h4>{{$pregunta->id}}</h4>
        {{-- <a href="{{route('respuestas.create',$pregunta)}}">agregar respuesta</a> --}}
        {{-- <a href="{{ route('respuestas.create', $pregunta->id) }}">agregar respuesta</a> --}}
        <a href="{{ route('respuestas.create', $pregunta) }}">agregar respuesta</a>


@endforeach
<br><br>
    <a href="{{ route('preguntas.create', $encuesta)}}">agregar pregunta</a>

        
    </form>

@endsection

