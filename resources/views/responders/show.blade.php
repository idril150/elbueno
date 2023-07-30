<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Listado de encuestas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                
                <form method="POST" action="{{ route('encuestas.guardarRespuestas', $encuesta) }}">
                    @csrf
                    @foreach($preguntas as $pregunta)  
                    <br>
                    <div class="ml-4">
                        <x-input-label for=$pregunta :value="__($pregunta->texto)" />
                            @if($pregunta->tipo)
                            <div >
                                    {{-- respuestas de pregunta abierta --}}
                                        @foreach($pregunta->respuestas as $respuesta)
                                        <label>
                                            <x-radio-input name="respuestas[{{ $pregunta->id }}]" value="{{ $respuesta->id }}" label="{{ $respuesta->texto }}" required />                    
                                        </label>
                                        <br>
                                        @endforeach                                        
                            </div>   
                            @else
                            <div>
                                <div class="grid grid-cols-12 ">
                                    {{-- ingresar respuesta de pregunta abierta --}}
                                    <div class="col-span-10">
                                        <x-text-input class="block mt-1 w-full" type="text" name="respuestas[{{ $pregunta->id }}]" required />
                                        
                                    </div>
                                </div>
                            </div>          
                            @endif                                   
                    </div>
                    @endforeach

                  
                    <div class="flex items-center justify-end mt-4">
                        <div class="grid grid-cols-12 ">
                            {{-- ingresar respuesta de pregunta abierta --}}
                            <div class="col-span-10">
                                <x-acept-button class="ml-4">
                                    {{ __('guardar respuestas') }}
                                </x-acept-button>
                            </div>
                        </div>
                           
                    </div>
                </form>
                <br>

            </div>
        </div>
    </div>
</x-app-layout>