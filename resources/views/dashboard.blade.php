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
                        {{ __('Go to User CRUD') }}
                    </a>
                </div>
                @endcan

                @can('encuestas.index')                                 
                <div class="p-6">
                    <a href="{{ route('encuestas.index') }}" class="text-white bg-green-500 hover:bg-green-700 font-bold py-2 px-4 rounded">
                        {{ __('Go to Encuestas CRUD') }}
                    </a>
                </div>
                @endcan
                @can('responders.index')
                <div class="p-6">
                    <a href="{{ route('responders.index') }}" class="text-white bg-purple-500 hover:bg-purple-700 font-bold py-2 px-4 rounded">
                        {{ __('Go to Responders View') }}
                    </a>
                </div>                                   
                @endcan
                <div class="p-6">
                    <a href="{{ route('profile.edit') }}" class="text-white bg-yellow-500 hover:bg-yellow-700 font-bold py-2 px-4 rounded">
                        {{ __('Go to Your Profile') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>