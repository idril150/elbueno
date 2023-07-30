<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Listado de encuestas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                
                @foreach($encuestas as $encuesta)
                <div class="p-6">
                    <a href="{{route('responders.show',$encuesta->id)}} " class="text-white bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded">
                        {{ __($encuesta->name) }}
                    </a>
                </div>
                @endforeach
              
                
            </div>
        </div>
    </div>
</x-app-layout>