@extends('layouts.plantilla')

@section('title', 'Encuestas')

@section('content')
    <h1>listado de formularios</h1>
    <a href="{{route('encuestas.create')}}">crear encuesta</a>
    <ul>
        @foreach ($encuestas as $encuesta)
            <li>
                <a href="{{route('encuestas.show',$encuesta->id)}}">{{$encuesta->name}}</a>
            </li>
        @endforeach
    </ul>
    {{$encuestas->links()}}
@endsection


    

