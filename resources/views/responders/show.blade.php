<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Encuesta: ') . $encuesta->name}}
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
                            <x-input-label :value="__($pregunta->texto)" />
                            @if($pregunta->tipo==0)
                                <div class="col-span-10">
                                    @foreach($pregunta->respuestas as $respuesta)
                                        <label>
                                            <x-radio-input name="respuestas[{{ $pregunta->id }}]" value="{{ $respuesta->id }}" label="{{ $respuesta->texto }}" required />
                                        </label>
                                        <br>
                                    @endforeach
                                </div>
                            @elseif($pregunta->tipo==2)
                                <div>
                                    <div class="grid grid-cols-12 ">
                                        <div class="col-span-10">
                                            <select id="respuestas" name="respuestas[{{ $pregunta->id }}]" required class="block w-full mt-1 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                                                <option value="" disabled selected >seleccionar respuesta</option>
                                                @foreach($pregunta->respuestas as $respuesta)
                                                    <option value="{{ $respuesta->id }}">{{ $respuesta->texto }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div>
                                    <div class="grid grid-cols-12 ">
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
                            @if ($preguntas->currentPage() == $preguntas->lastPage())
                                <div class="col-span-10">
                                    <x-acept-button class="ml-4">
                                        {{ __('guardar') }}
                                    </x-acept-button>
                                </div>
                            @endif
                        </div>
                    </div>
                </form>
                
                <br>

            </div>

            {{-- botones de paginacion --}}

            
            <div class="mt-4">
                <ul class="flex justify-between items-center ">
                    <li>
                        @if ($preguntas->currentPage() > 1)
                            <a href="{{ $preguntas->previousPageUrl() }}" class="text-black-500 hover:underline  bg-gray-100 rounded-md p-3">&lt; Anterior</a>
                        @endif
                    </li>
                    <li>
                        @if ($preguntas->hasMorePages())
                            <a href="{{ $preguntas->nextPageUrl() }}" class="text-black-500  hover:underline bg-gray-100 rounded-md p-3">Siguiente &gt;</a>
                        @endif
                        
                    </li>
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>


