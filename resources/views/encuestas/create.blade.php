<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Crear pregunta') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                
                <form method="POST" action="{{ route('encuestas.store') }}">
                    @csrf                    
                    <br>
                    <div class="ml-4">                                                                                                    
                            <div>
                                <div class="grid grid-cols-12 ">                                    
                                    <div class="col-span-10">
                                        <x-input-label for="nombre" :value="__('nombre')" />
                                        <x-text-input class="block mt-1 w-full" type="text" name="name" required />      
                                        <br>                                  
                                    </div>
                                </div>
                            </div>                                                                                                    
                            <div>
                                <div class="grid grid-cols-12 ">                                    
                                    <div class="col-span-10">
                                        <x-input-label for="periodo" :value="__('periodo')" />
                                        <x-text-input class="block mt-1 w-full" type="text" name="periodo" required />      
                                        <br>                                  
                                    </div>
                                </div>
                            </div>   
                            <div>
                                <x-input-label for="carrera" :value="__('Carrera')" />
                                <select id="carrera" name="carrera" class="block w-full mt-1 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 dark:bg-gray-800 dark:border-gray-700 dark:text-white">
                                    <option value="" disabled selected>Select Carrera</option>
                                    @foreach($carreras as $carrera)
                                        <option value="{{ $carrera }}">{{ $carrera }}</option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('carrera')" class="mt-2" />
                            </div>   
                    </div>                              
                    <div class="flex items-center justify-end mt-4">
                        <div class="grid grid-cols-12 ">
                           
                            
                        </div>
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-sm text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            Guardar Encuesta
                        </button>
                        
                    </div>
                </form>
                <br>

            </div>
        </div>
    </div>
</x-app-layout>