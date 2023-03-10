@extends('layouts.plantilla')

@section('title', 'encuestas')

@section('content')
    <h1>lista de las encuestas</h1>    
    <br>
    <a href="{{route('encuestas.create')}}">crearencuesta</a>
    <br>
    <button onclick="{{ asset('js/prueba.js') }}">Ejecutar script</button>
    <br>
    <ul>
        @foreach ($encuestas as $encuesta)
            <li>
                <a href="{{route('encuestas.show',$encuesta->id)}}">{{$encuesta->name}}</a>
                <br>
            </li>
        @endforeach
    </ul>
@endsection