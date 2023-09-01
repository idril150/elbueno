<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editar usuario') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ route('users.actualizar', $user->id) }}" method="post">
                    @csrf
                    @method('put')
                    <!-- Campo de edicion de nombre -->
                    <div class="ml-4">
                        <div class="grid grid-cols-12 p-6">                           
                            <div class="col-span-10">
                                <x-input-label for="name" :value="__('Nombre')" />
                                <x-text-input type="text" name="name" :value="$user->name" class="form-input rounded-md shadow-sm w-full" />                             
                            </div>
                        </div>        

                        <div class="grid grid-cols-12 p-6">                           
                            <div class="col-span-10">
                                <x-input-label for="email" :value="__('Correo electrónico')" />
                                <x-text-input type="email" name="email" :value="$user->email" class="form-input rounded-md shadow-sm w-full" />
                            </div>
                        </div>  
                        
                        <div class="grid grid-cols-12 p-6">                           
                            <div class="col-span-10">
                                <x-input-label for="Ncontrol" :value="__('Número de control')" />
                                <x-text-input type="text" name="Ncontrol" :value="$user->Ncontrol" class="form-input rounded-md shadow-sm w-full" />
                            </div>
                        </div> 

                        <div class="grid grid-cols-12 p-6">                           
                            <div class="col-span-10">
                                <x-input-label for="telefono" :value="__('Teléfono')" />
                                <x-text-input type="text" name="telefono" :value="$user->telefono" class="form-input rounded-md shadow-sm w-full" pattern="[0-9]+" />
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
