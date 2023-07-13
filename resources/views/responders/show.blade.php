@extends('layouts.plantilla')

@section('title', 'Encuesta ' . $encuesta->name)

@section('content')

{{-- <div class="min-h-screen bg-gradient-to-r from-purple-300 via-gray-300 to-teal-300">
  

    <div class="container">
        <div class="grid grid-cols-12 ">
                <div class="col-span-7 col-start-4">
                <div class="container">
                    <div class="grid grid-cols-11 border-2 border-dashed">
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
                    </div>
                </div>                
    
                @foreach ($preguntas as $pregunta)
                <div class="container">
                    <div class="grid grid-cols-11 border-b-2 border-r-2 border-l-2 border-dashed ">
                        <div class="col-span-8">
                            <h4>{{ $pregunta->texto }}</h4> 
    
                            @foreach ($pregunta->respuestas->where('estado', 1) as $respuesta)
                            <div class="container ">
                                <div class="grid grid-cols-12 ">
    
                                    <div class="col-span-10">
                                        <li>{{ $respuesta->texto }}</li>
                                    </div>
                                    <div class="container text-center">
                                        <div class="grid grid-flow-col gap-3 ">
                                            <div>
                                                <a href="{{route('respuestas.edit',$respuesta->id)}}" class="bg-yellow-400 px-2 py-0.25 rounded-lg text-center">Editar</a>
                                                
                                            </div>
                                            
                                        </div>                                    
                                    </div>
                                </div>
                            </div>
                            @endforeach    
                        </div>
                    </div>                                        
                </div>
                @endforeach
            </div>                       
        </div>        
    </div>
    
    
    <br><br>
      
    
             --}}

             {{-- <form action="{{ route('encuestas.guardarRespuestas', $encuesta) }}" method="POST">
                @csrf
                
                @foreach($preguntas as $pregunta)
                    <p>{{ $pregunta->texto }}</p>
                    
                    @if($pregunta->tipo)
                        <!-- Campo de respuesta para preguntas de opción múltiple -->
                        <div>
                            @foreach($pregunta->respuestas as $respuesta)
                                <label>
                                    <input type="checkbox" name="respuestas[{{ $pregunta->id }}][]" value="{{ $respuesta->id }}">
                                    {{ $respuesta->texto }}
                                </label>
                                <br>
                            @endforeach
                        </div>
                    @else
                        <!-- Campo de respuesta para preguntas de texto abierto -->
                        <div>
                            <input type="text" name="respuestas[{{ $pregunta->id }}]">
                        </div>
                    @endif
                @endforeach
                
                <button type="submit">Enviar respuestas</button>
            </form> --}}

            <form action="{{ route('encuestas.guardarRespuestas', $encuesta) }}" method="POST">
                @csrf
    
                @foreach($preguntas as $pregunta)
                    <p>{{ $pregunta['texto'] }}</p>
    
                    @if($pregunta['tipo'])
                        <!-- Campo de respuesta para preguntas de opción múltiple -->
                        <div>
                            @foreach($pregunta['respuestas'] as $respuesta)
                                <label>
                                    <input type="radio" name="respuestas[{{ $pregunta->id }}]" value="{{ $respuesta->id }}">
                                    {{ $respuesta->texto }}
                                </label>
                                <br>
                            @endforeach
                        </div>
                    @else
                        <!-- Campo de respuesta para preguntas de texto abierto -->
                        <div>
                            <input type="text" name="respuestas[{{ $pregunta->id }}]">
                        </div>
                    @endif
                @endforeach
    
                <button type="submit">Enviar respuestas</button>
            </form>
    
@endsection

