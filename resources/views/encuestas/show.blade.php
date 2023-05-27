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
    <p><strong>carrera: </strong>{{$encuesta->carrera}}</p>
    <br>
    <a href="{{route('encuestas.edit',$encuesta)}}">Editar encuesta</a>


        @foreach ($preguntas as $pregunta)
        <h4>{{ $pregunta->texto }}</h4>        
       
        <a href="{{route('preguntas.edit',$pregunta->id)}}">editar pregunta</a>
        <form action="{{ route('preguntas.cambiarEstado', $pregunta->id) }}" method="POST">
            @csrf
                <input type="hidden" name="estado" value="0">        
            <button type="submit">Desactivar</button>
        </form>
        
        <ul>
        <ol type="a">
        @foreach ($pregunta->respuestas->where('estado', 1) as $respuesta)
        
            <li>{{ $respuesta->texto }}</li>
            <a href="{{route('respuestas.edit',$respuesta->id)}}">editar respuesta</a>
            <form action="{{ route('respuestas.cambiarEstado', $respuesta->id) }}" method="POST">
                @csrf
                @method('put')
                    <input type="hidden" name="estado" value="0">        
                <button type="submit">Desactivar</button>
            </form>
        @endforeach 
        </ol>
        </ul>
        <h4>{{$pregunta->id}}</h4>


        <a href="{{route('respuestas.createe',$pregunta->id)}}">crear respuesta</a>


@endforeach
<br><br>
    <a href="{{ route('preguntas.create', $encuesta)}}">agregar pregunta</a>

        
    

@endsection

