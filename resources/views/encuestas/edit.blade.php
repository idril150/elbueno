@extends('layouts.plantilla')

@section('title', 'edit')

@section('content')
    <h1>en esta pagina se puede editar un formulario</h1>
    <a href="{{route('encuestas.show',$encuesta->id)}}"><-- volver a la encuesta</a>
    <br>
    <form action="{{route('encuestas.update', $encuesta)}}" method="post">
        @csrf
        @method('put')
        <label>
            Nombre:
            <input type="text" name="name" value="{{old('name',$encuesta->name)}}">
        </label>
        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <label>
            periodo:
            <textarea name="periodo" rows="5">{{old('periodo',$encuesta->periodo)}}</textarea>
        </label>
        @error('periodo')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <label>
            <input type="hidden" name="estado" value="1">
        </label>
        <br>
        <button type="submit">actualizar formulario</button>
    </form>
@endsection
