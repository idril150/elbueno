@extends('layouts.plantilla')

@section('title', 'Encuesta ' . $encuesta->name)

@section('content')

<div class="bg-gradient-to-br from-purple-300 via-indigo-500 to-teal-300">
  

<div class="container">
    <div class="grid grid-cols-12 ">
            <div class="col-span-8 col-start-3">
            <div class="container">
                <div class="grid grid-cols-12 border-2 border-dashed">
                    <div class="col-span-10">
                        <h1>Encuesta: {{$encuesta->name}}</h1>
                        <p><strong>periodo: </strong>{{$encuesta->periodo}}</p>
                        <p><strong>Area: </strong>{{$encuesta->carrera}}</p>
                        <p><strong>estado: </strong>@php
                            if ($encuesta->estado==1){
                                echo "activo";
                            }
                            else {
                                echo "inactivo";
                            }
                        
                        @endphp</p>
                    </div>
                    
                    <div class="text-end col-span-2">
                        <a href="{{route('encuestas.edit',$encuesta)}}" class="border-dashed border-2 border-yellow-400 bg-yellow-400 rounded-lg text-center">Editar encuesta</a>
                        <br><br><br>
                        <a href="{{ route('preguntas.create', $encuesta)}}" class="border-dashed border-2 border-blue-400 bg-blue-400 rounded-lg text-center">agregar pregunta</a>
                    </div>
                </div>
            </div>                

            @foreach ($preguntas as $pregunta)
            <div class="container">
                <div class="grid grid-cols-12 border-2 border-dashed ">
                    <div class="col-span-8">
                        <h4>{{ $pregunta->texto }}</h4> 

                        @foreach ($pregunta->respuestas->where('estado', 1) as $respuesta)
                        <div class="container">
                            <div class="grid grid-cols-12 ">

                                <div class="col-span-10">
                                    <li>{{ $respuesta->texto }}</li>
                                </div>
                                <div class="container text-center">
                                    <div class="grid grid-flow-col gap-3 ">
                                        <div>
                                            <a href="{{route('respuestas.edit',$respuesta->id)}}" class="bg-yellow-400 rounded-lg text-center">Editar</a>
                                        </div>
                                        <div>
                                            <form action="{{ route('respuestas.cambiarEstado', $respuesta->id) }}" method="POST">
                                                @csrf
                                                @method('put')
                                                    <input type="hidden" name="estado" value="0">
                                                <button type="submit" class="bg-red-400 rounded-lg text-center">Desactivar</button>
                                            </form>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    <div class="col-span-3 col-start-10">
                        <div class="container ">
                            <div class="grid grid-cols-5 gap-y-2 gap-x-1 border-2">
                                
                                <div class="col-span-3">
                                    <a href="{{route('preguntas.edit',$pregunta->id)}}" class=" border-dashed border-2 border-yellow-400 bg-yellow-400 rounded-lg text-center">editar pregunta</a>
                                </div>
                                
                                <div class="col-span-2">
                                    <form action="{{ route('preguntas.cambiarEstado', $pregunta->id) }}" method="POST">
                                        @csrf
                                            <input type="hidden" name="estado" value="0">        
                                        <button type="submit" class="border-dashed border-2 border-red-400 bg-red-400">Desactivar</button>
                                    </form>
                                </div>
                                <div class="col-span-4">
                                    @for ($i = 0; $i < count($pregunta->respuestas->where('estado', 1)) - 1; $i++)
                                    <br>
                                    @endfor

                                    <a href="{{route('respuestas.createe',$pregunta->id)}}" class="border-dashed border-2 border-blue-400 bg-blue-400">crear respuesta</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>                                        
            </div>
            @endforeach
        </div>
        
       
    </div>
    
</div>


<br><br>
  

        
    

@endsection

