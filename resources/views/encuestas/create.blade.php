@extends('layouts.plantilla')

@section('title', 'create')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-purple-300 via-indigo-500 to-teal-300">
    <div class="col-span-2 col-start-2">
        <div class="container">
            <div class="grid grid-cols-12 border-2 border-dashed">
                <div></div>
                <h1>En esta pagina se puede crear un formulario</h1>
                <a href="{{route('encuestas.index')}}"class="bg-blue-400 px-4 py-2 text-sm uppercase font-bold text-cyan-50 rounded-lg text-center"><-- volver</a>
                <br>
                <form action="{{route('encuestas.store')}}" method="POST">
    </div>
        @csrf
        <label>
            Nombre:
            <input type="text" name="name" value="{{old('name')}}">
        </label>

        @error('name')
            <br>
            <small>{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            periodo:
            <input type="text" name="periodo" value="{{old('periodo')}}">
        </label>
        @error('periodo')
            <br>
            <small>{{$message}}</small>
            <br>
        @enderror
        <label>
            <input type="hidden" name="estado" value="1">
        </label>
        <br>
        <label >
            Area
            <input type="text" name="carrera" value="{{old('carrera')}}">
        </label>
        <br>
        <button type="submit">enviar formulario</button>
    </form>
</div>
@endsection
