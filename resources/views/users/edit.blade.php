<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editar usuario') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ route('users.actualizar', $user->id) }}" method="post">
                    @csrf
                    @method('put')
                    <!-- Campo de edicion de nombre -->
                    <div class="mb-4">
                        <x-input-label for="name" :value="__('Nombre')" />
                        <x-text-input type="text" name="name" :value="$user->name" class="form-input rounded-md shadow-sm w-full" />
                    </div>

                    <!-- Campo de edicion de Email -->
                    <div class="mb-4">
                        <x-input-label for="email" :value="__('Correo electrónico')" />
                        <x-text-input type="email" name="email" :value="$user->email" class="form-input rounded-md shadow-sm w-full" />
                    </div>

                    <!-- Campo de edición del Ncontrol -->
                    <div class="mb-4">
                        <x-input-label for="Ncontrol" :value="__('Número de control')" />
                        <x-text-input type="text" name="Ncontrol" :value="$user->Ncontrol" class="form-input rounded-md shadow-sm w-full" />
                    </div>

                    <!-- Campo de edición del teléfono -->
                    <div class="mb-4">
                        <x-input-label for="telefono" :value="__('Teléfono')" />
                        <x-text-input type="text" name="telefono" :value="$user->telefono" class="form-input rounded-md shadow-sm w-full" pattern="[0-9]+" />
                    </div>

                    <!-- Campo de edición de la carrera -->
                    <div class="mb-4">
                        <x-input-label for="carrera" :value="__('Carrera')" />
                        <x-text-input type="text" name="carrera" :value="$user->carrera" class="form-input rounded-md shadow-sm w-full" />
                    </div>

                    <!-- Otros campos de edición del usuario, si los hay -->

                    <div class="flex justify-end">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Guardar cambios</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
