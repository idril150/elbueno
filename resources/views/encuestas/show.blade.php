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
        <li>{{ $pregunta->texto }}</li>
    @endforeach

        
    </form>

@endsection

