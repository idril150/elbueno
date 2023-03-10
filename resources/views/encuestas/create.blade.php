@extends('layouts.plantilla')

@section('title','create')

@section('content')
    <h1>aquí se crean las encuestas</h1>
    <br>
    <form action="{{route('encuestas.store')}}" method="POST">
        @csrf
        <label>
            Nombre:
            <input type="text" name="name" value="{{old('name')}}">
        </label>

        <br>
        <br>
        <label>
            periodo:
            <input type="text" name="period" value="{{old('period')}}">
        </label>
      
        <br>
        <br>
        <label>
            estado:
            <br>
           activo <input type="checkbox" name="estado" value="1">
           <br>
           inactivo <input type="checkbox" name="estado" value="0">
        </label>
            <form action=""></form>
        <br>
        <br>
        <button type="submit">enviar formulario</button>
    </form>
<br>
<button onclick="{{asset("js/script.js") }}'">Ejecutar script</button>
@endsection