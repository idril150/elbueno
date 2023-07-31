<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editar Encuesta') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                
                <form action="{{ route('encuestas.show', $encuesta->id) }}" method="post">
                    @csrf                    
                    @method('put')
                    <br>
                    <div class="ml-4">                                                                                                    
                            <div>
                                <div class="grid grid-cols-12 p-6">                           
                                    <div class="col-span-10">
                                        <x-input-label for="encuestas" :value="__('Nombre')" />
                                        <x-text-input type="text" name="name" :value="$encuesta->name" class="form-input rounded-md shadow-sm w-full" />                             
                                    </div>
                                </div>  
                            </div>     
                            
                            <div>
                                <div class="grid grid-cols-12 p-6">                           
                                    <div class="col-span-10">
                                        <x-input-label for="encuestas" :value="__('Periodo')" />
                                        <x-text-input type="text" name="periodo" :value="$encuesta->periodo" class="form-input rounded-md shadow-sm w-full" />                             
                                    </div>
                                </div>  
                            </div>   
                            
                            <div>
                                <div class="grid grid-cols-12 p-6">                           
                                    <div class="col-span-10">
                                        <x-input-label for="encuestas" :value="__('Área')" />
                                        <x-text-input type="text" name="carrera" :value="$encuesta->carrera" class="form-input rounded-md shadow-sm w-full" />                             
                                    </div>
                                </div>  
                            </div>   
                    </div>  

                   <div class="flex items-center justify-end mt-4">
                        <div class="grid grid-cols-12 ">
                           
                            <div class="col-span-10 mb-4">
                                <x-acept-button class="ml-4">
                                    {{ __('guardar') }}
                                </x-acept-button>
                            </div>
                        </div> 
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>