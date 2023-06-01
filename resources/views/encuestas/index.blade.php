@extends('layouts.plantilla')

@section('title', 'Encuestas')

@section('content')

    <h1>listado de formularios</h1>
    <a href="{{route('encuestas.create')}}">crear encuesta</a>
    <ul>
        @foreach($encuestas as $encuesta)

        <div class="container">
            <div class="grid grid-cols-2 gap-4">
                <div class="bg-blue-100"><a href="{{route('encuestas.show',$encuesta->id)}}">{{$encuesta->name}}</a></div>
                <div class="bg-blue-200"><form action="{{ route('encuestas.cambiarEstado', $encuesta->id) }}" method="POST">
                    @csrf
                        <input type="hidden" name="estado" value="0">        
                    <button type="submit" class="button">Desactivar</button>
                </form></div>
              
            </div>
        </div>





        
        
        
    <ul>
    </ul>
    
@endforeach
    </ul>
    {{$encuestas->links()}}
@endsection


    

