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
                 <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
                    <input type="text" name="name" id="name" value="{{ $user->name }}" class="form-input rounded-md shadow-sm w-full">
                </div>

                <!-- Campo de edicion de Email -->
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Correo electrónico:</label>
                    <input type="email" name="email" id="email" value="{{ $user->email }}" class="form-input rounded-md shadow-sm w-full">
                </div>

                <!-- Campo de edición del Ncontrol -->
                <div class="mb-4">
                    <label for="Ncontrol" class="block text-gray-700 text-sm font-bold mb-2">Número de control:</label>
                    <input type="text" name="Ncontrol" id="Ncontrol" value="{{ $user->Ncontrol }}" class="form-input rounded-md shadow-sm w-full">
                </div>

                <!-- Campo de edición del teléfono -->
                <div class="mb-4">
                    <label for="telefono" class="block text-gray-700 text-sm font-bold mb-2">Teléfono:</label>
                    <input type="text" name="telefono" id="telefono" value="{{ $user->telefono }}" class="form-input rounded-md shadow-sm w-full" pattern="[0-9]+">
                </div>

                <!-- Campo de edición de la carrera -->
                <div class="mb-4">
                    <label for="carrera" class="block text-gray-700 text-sm font-bold mb-2">Carrera:</label>
                    <input type="text" name="carrera" id="carrera" value="{{ $user->carrera }}" class="form-input rounded-md shadow-sm w-full">
                </div>

                <!-- Otros campos de edición del usuario, si los hay -->

                <div class="flex justify-end">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Guardar cambios</button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
