<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Bienvenido al sistema de seguimiento de egresados') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                
              
                @can('users.index')                  
                <div class="p-6">
                    <a href="{{ route('users.index') }}" class="text-white bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded">
                        {{ __('Gestión de usuarios') }}
                    </a>
                </div>
                @endcan

                @can('encuestas.index')                                 
                <div class="p-6">
                    <a href="{{ route('encuestas.index') }}" class="text-white bg-green-500 hover:bg-green-700 font-bold py-2 px-4 rounded">
                        {{ __('Listado de encuestas') }}
                    </a>
                </div>
                @endcan
                @can('responders.index')
                <div class="p-6">
                    <a href="{{ route('responders.index') }}" class="text-white bg-purple-500 hover:bg-purple-700 font-bold py-2 px-4 rounded">
                        {{ __('Responder encuestas') }}
                    </a>
                </div>                                   
                @endcan
                <div class="p-6">
                    <a href="{{ route('profile.edit') }}" class="text-white bg-yellow-500 hover:bg-yellow-700 font-bold py-2 px-4 rounded">
                        {{ __('MI Informacion') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (Session::has('success'))
    <script>
        // Muestra el mensaje emergente cuando la página haya cargado completamente
        document.addEventListener('DOMContentLoaded', function () {
            Swal.fire({
                icon: 'success',
                title: 'Encuesta respondida exitosamente',
                showConfirmButton: false,
                timer: 2000 // El mensaje desaparecerá después de 2 segundos
            });
        });
    </script>
    @endif
</x-app-layout>