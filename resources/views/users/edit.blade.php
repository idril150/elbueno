@extends('layouts.plantilla')

@section('content')
    <div class="flex items-center justify-center min-h-screen bg-gradient-to-r from-teal-100 to-teal-200">
        <div class="w-full max-w-lg bg-white rounded-lg shadow-lg p-8">
            <h2 class="text-2xl font-bold my-4">Editar Usuario</h2>
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
        </form>
    </div>
@endsection
