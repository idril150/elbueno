@extends('layouts.plantilla')

@section('title','show')

@section('content')
    <h1>aquí se muestran las encuestas</h1>
    <h1>bienvenido a la encuesta: {{$encuesta->name}}</h1>
    <a href="{{route('encuestas.index')}}"><-- volver a las encuestas</a>
    
    <p><strong>periodo: </strong>{{$encuesta->periodo}}</p>
    <p><strong>estado: </strong>
    @php
        if ($encuesta->estado==1){
            echo "activo";
        }
        else {
            echo "inactivo";
        }
    @endphp</p>
    <br>
@endsection