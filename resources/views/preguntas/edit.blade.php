<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editar pregunta') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                
                <form method="POST" action="{{ route('preguntas.update', $pregunta) }}">
                    @method('put')
                    @csrf                    
                    <br>
                    <div class="ml-4">                                                                                                    
                            <div>
                                <div class="grid grid-cols-12 ">
                                    {{-- ingresar respuesta de pregunta abierta --}}
                                    <div class="col-span-10">
                                        <x-input-label for="pregunta" :value="__('pregunta')" />
                                        <x-text-input class="block mt-1 w-full" type="text" name="texto" :value="old('texto',$pregunta->texto)" required />      
                                        <br>                                  
                                    </div>
                                </div>
                            </div>                                                   
                    </div>                              
                    <div class="flex items-center justify-end mt-4">
                        <div class="grid grid-cols-12 ">
                           
                            <div class="col-span-10">
                                <x-acept-button class="ml-4">
                                    {{ __('guardar') }}
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