<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editar usuario') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-10xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                
                <!-- Campo de edicion de nombre -->
                <div class="ml-4">
                    <div class="grid grid-cols-12 p-6">
                        <div class="col-span-10">                                
                            <x-h1>Encuesta: {{$encuesta->name}}</x-h1>
                            <x-p><strong>periodo: </strong>{{$encuesta->periodo}}</x-p>
                            <x-p><strong>periodo: </strong>{{$encuesta->periodo}}</x-p>
                            <x-p><strong>Area: </strong>{{$encuesta->carrera}}</x-p>
                            <x-p><strong>estado: </strong>
                            @php
                                if ($encuesta->estado==1){
                                    echo "activo";
                                }
                                else {
                                    echo "inactivo";
                                }                            
                                @endphp</x-p>
                        </div>
                            
                        <div class="text-end col-span-2 ">
                            <x-aa href="{{route('encuestas.edit',$encuesta)}}" >Editar encuesta</x-aa>
                            <br><br><br>
                            <!-- resources/views/some_view.blade.php -->
                            <x-aa href="{{ route('preguntas.create', $encuesta)}}" class="bg-blue-600 text-center">agregar pregunta</x-aa>
                        </div>
                    </div>
                </div>                        
                @foreach ($preguntas as $pregunta)
                    <div class="ml-4">
                        <div class="grid grid-cols-12 p-6">
                            <div class="col-span-8">
                                <x-h4>{{ $pregunta->texto }}</x-h4>         
                                @if ($pregunta->tipo)
                                <!-- Pregunta de opción múltiple -->
                                    @foreach ($pregunta->respuestas->where('estado', 1) as $respuesta)
                                        <div class="container">
                                            <div class="grid grid-cols-12 p-4">
                                                <div class="col-span-10">
                                                    <x-li>{{ $respuesta->texto }}</x-li>
                                                </div>
                                                <div class="container text-center">
                                                    <div class="grid grid-flow-col gap-3">
                                                        <div>
                                                            <x-aa href="{{ route('preguntas.create', $encuesta)}}">agregar pregunta</x-aa>
                                                        </div>
                                                        <div class="block">
                                                            <form action="{{ route('respuestas.cambiarEstado', $respuesta->id) }}" method="POST">
                                                                @csrf
                                                                @method('put')
                                                                <input type="hidden" name="estado" value="0">
                                                                <x-elim-button class="ml-4">
                                                                    {{ __('eliminar') }}
                                                                </x-elim-button>                                                        
                                                                <br>
                                                              </form>
                                                        </div>
                                                    </div>                                    
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif                    
                            </div>
                            <div class="col-span-3 col-start-10">
                                <div class="py-12">
                                    <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
                                        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                                            <x-aa href="{{route('preguntas.edit',$pregunta->id)}}" class=" border-dashed border-2 border-yellow-400 bg-yellow-400 rounded-lg text-center">editar pregunta</x-aa>
                                        </div>
                                        <br>
                                        <div class="col-span-2">
                                            <form action="{{ route('preguntas.cambiarEstado', $pregunta->id) }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="estado" value="0">        
                                                <x-elim-button type="submit" class="border-dashed border-2 border-red-400 bg-red-400 py-0.25 rounded-lg text-center">Desactivar</x-elim-button>
                                            </form>
                                        </div>
                                        <div class="col-span-4 col-start-2">
                                            @for ($i = 0; $i < count($pregunta->respuestas->where('estado', 1)) - 1; $i++)
                                            <br>
                                            @endfor
                                            <x-aa href="{{ route('preguntas.create', $encuesta)}}" class="bg-blue-600 text-center">agregar respuesta</x-aa>
                                            
                                        </div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                </div>
                            </div>        
                        </div>                                        
                    </div>
                @endforeach            
            </div>                              
        </div>                           
    </div>
</x-app-layout> 

{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editar usuario') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-10xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                
                <!-- Campo de edicion de nombre -->
                <div class="ml-4">
                    <div class="grid grid-cols-12 p-6">
                        <div class="col-span-10">                                
                            <x-h1>Encuesta: {{$encuesta->name}}</x-h1>
                            <x-p><strong>periodo: </strong>{{$encuesta->periodo}}</x-p>
                            <x-p><strong>periodo: </strong>{{$encuesta->periodo}}</x-p>
                            <x-p><strong>Area: </strong>{{$encuesta->carrera}}</x-p>
                            <x-p><strong>estado: </strong>
                            @php
                                if ($encuesta->estado==1){
                                    echo "activo";
                                }
                                else {
                                    echo "inactivo";
                                }                            
                                @endphp</x-p>
                        </div>
                            
                        <div class="text-end col-span-2 ">
                            <x-aa href="{{route('encuestas.edit',$encuesta)}}" >Editar encuesta</x-aa>
                            <br><br><br>
                            <!-- resources/views/some_view.blade.php -->
                            <x-aa href="{{ route('preguntas.create', $encuesta)}}" class="bg-blue-600 text-center">agregar pregunta</x-aa>
                        </div>
                    </div>
                </div>                        
                @foreach ($preguntas as $pregunta)
                    <div class="ml-4 pregunta" data-id="{{ $pregunta->id }}">
                        <div class="grid grid-cols-12 p-6">
                            <div class="col-span-8 pregunta-texto">
                                <x-h4>{{ $pregunta->texto }}</x-h4>
                            </div>
                            <div class="col-span-3 col-start-10 opciones-pregunta" style="display: none;">
                                <div class="py-12">
                                    <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
                                        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                                            <x-aa href="{{route('preguntas.edit',$pregunta->id)}}" class=" border-dashed border-2 border-yellow-400 bg-yellow-400 rounded-lg text-center">editar pregunta</x-aa>
                                        </div>
                                        <br>
                                        <div class="col-span-2">
                                            <form action="{{ route('preguntas.cambiarEstado', $pregunta->id) }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="estado" value="0">        
                                                <x-elim-button type="submit" class="border-dashed border-2 border-red-400 bg-red-400 py-0.25 rounded-lg text-center">Desactivar</x-elim-button>
                                            </form>
                                        </div>
                                        <div class="col-span-4 col-start-2">
                                            @foreach ($pregunta->respuestas->where('estado', 1) as $respuesta)
                                                <div class="grid grid-cols-12 p-4">
                                                    <div class="col-span-10">
                                                        <x-li>{{ $respuesta->texto }}</x-li>
                                                    </div>
                                                    <div class="container text-center">
                                                        <div class="grid grid-flow-col gap-3">
                                                            <div>
                                                                <x-aa href="{{ route('preguntas.create', $encuesta)}}">agregar pregunta</x-aa>
                                                            </div>
                                                            <div class="block">
                                                                <form action="{{ route('respuestas.cambiarEstado', $respuesta->id) }}" method="POST">
                                                                    @csrf
                                                                    @method('put')
                                                                    <input type="hidden" name="estado" value="0">
                                                                    <x-elim-button class="ml-4">
                                                                        {{ __('eliminar') }}
                                                                    </x-elim-button>                                                        
                                                                    <br>
                                                                  </form>
                                                            </div>
                                                        </div>                                    
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                </div>
                            </div>        
                        </div>                                        
                    </div>
                @endforeach            
            </div>                              
        </div>                           
    </div>
</x-app-layout>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const preguntas = document.querySelectorAll('.pregunta');

        preguntas.forEach(pregunta => {
            pregunta.addEventListener('click', function() {
                const opciones = pregunta.querySelector('.opciones-pregunta');
                opciones.style.display = opciones.style.display === 'none' ? 'block' : 'none';
            });
        });
    });
</script> --}}
