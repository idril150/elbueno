@extends('layouts.plantilla')

@section('title', 'Encuesta ' . $encuesta->name)

@section('content')

 <div class="min-h-screen bg-gradient-to-r from-purple-300 via-gray-300 to-teal-300">
  

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
                <form action="{{ route('encuestas.guardarRespuestas', $encuesta) }}" method="POST">
                    @csrf
                    @foreach($preguntas as $pregunta)                    
                <div class="container">
                    <div class="grid grid-cols-11 border-b-2 border-r-2 border-l-2 border-dashed ">
                        <div class="col-span-8">
                            
                            <p>{{ $pregunta->texto }}</p> 
    
                            
                            @if($pregunta->tipo)
                            <div class="container ">
                                <div class="grid grid-cols-12 ">
                                    {{-- respuestas de pregunta abierta --}}
                                    <div class="col-span-10">
                                        @foreach($pregunta->respuestas as $respuesta)
                                        <label>
                                            <input type="radio" name="respuestas[{{ $pregunta->id }}]" value="{{ $respuesta->id }}">
                                            {{ $respuesta->texto }}                                            
                                        </label>
                                        <br>
                                        @endforeach
                                        
                                    </div>
                                </div>
                            </div>   
                            @else
                            <div class="container ">
                                <div class="grid grid-cols-12 ">
                                    {{-- ingresar respuesta de pregunta abierta --}}
                                    <div class="col-span-10">
                                        <input type="text" name="respuestas[{{ $pregunta->id }}]">
                                        <br>
                                    </div>
                                </div>
                            </div>          
                            @endif        
                        </div>
                    </div>
                    @endforeach
                    <br>
                    <button type="submit" class="bg-blue-400 px-4 py-1 rounded-lg text-center ">Enviar respuestas</button>                                        
                </div>
                
            </div>                       
        </div>        
    </div>
    
    
    <br><br>
      
    
             
             {{--
                
                
                    
                    
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
                            
                        </div>
                    @endif
                @endforeach
                
                <button type="submit">Enviar respuestas</button>
            </form> 

            {{-- <form action="{{ route('encuestas.guardarRespuestas', $encuesta) }}" method="POST">
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
            </form> --}}
    
@endsection

