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
        



    @if ($pregunta->estado == 1)
    <form action="{{ route('preguntas.update', $pregunta->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" name="texto" value="{{ $pregunta->texto }}">
        <input type="hidden" name="tipo" value="{{ $pregunta->tipo }}">
        <input type="hidden" name="estado" value="0">
        <button type="submit">Desactivar</button>
    </form>
@else
    <form action="{{ route('preguntas.update', $pregunta->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" name="estado" value="1">
        <button type="submit">Activar</button>
    </form>
@endif
  
        
        <ul>
        @foreach ($pregunta->respuestas->where('estado', 1) as $respuesta)
            <li>{{ $respuesta->texto }}</li>
            <a href="{{route('respuestas.edit',$respuesta->id)}}">editar respuesta</a>
        @endforeach 
        </ul>
        <h4>{{$pregunta->id}}</h4>


        <a href="{{route('respuestas.createe',$pregunta->id)}}">crear respuesta</a>


        {{-- <a href="{{ route('respuestas.create', $pregunta->id) }}">agregar respuesta</a> --}}
        {{-- <a href="{{ route('respuestas.create', $pregunta) }}">agregar respuesta</a> --}}


@endforeach
<br><br>
    <a href="{{ route('preguntas.create', $encuesta)}}">agregar pregunta</a>

        
    </form>

@endsection

