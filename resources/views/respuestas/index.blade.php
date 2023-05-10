@extends('layouts.plantilla')

@section('title', 'respuestas')

@section('content')
    <h1>listado de formularios</h1>
    <a href="{{route('respuestas.create')}}">crear respuesta</a>
    <ul>
        @foreach ($respuestas as $respuesta)
            <li>
                <a href="{{route('respuestas.show',$respuesta->id)}}">{{$respuesta->name}}</a>
            </li>
        @endforeach
    </ul>
    {{$respuestas->links()}}
@endsection


    

