<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Listado de encuestas') }}
        </h2>
        <x-aaz href="{{ route('encuestas.create')}}" class="text-center">crear encuesta</x-aaz>
        <a href="{{route('encuestas.create_cord')}}">hola</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                @foreach($encuestas as $encuesta)
                <div class="grid grid-cols-12 p-6">
                    {{-- ingresar respuesta de pregunta abierta --}}
                    <div class="col-span-10">
                        <x-aaz href="{{ route('encuestas.show', $encuesta->id) }}" class="text-white bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded">
                            {{ __($encuesta->name) }}
                        </x-aaz>
                    </div>
                    <div class="col-span-2">
                        <form action="{{ route('encuestas.cambiarEstado', $encuesta->id) }}" method="POST">
                            @csrf
                            <input type="hidden" name="estado" value="0">
                            <button type="submit" onclick="return confirm('¿Estás seguro de que deseas desactivar la encuesta?')" class="px-4 py-2 text-sm font-bold bg-red-400 rounded-lg text-white">Desactivar</button>
                        </form>
                    </div>
                    <div class="col-span-12 mt-4"> <!-- Nueva celda para el botón de exportar -->
                        <a href="{{ route('encuestas.export', $encuesta->id) }}" class="text-white bg-green-500 hover:bg-green-700 font-bold py-2 px-4 rounded">
                            {{ __('Exportar') }}
                        </a>
                    </div>
                </div>
                
                @endforeach

            </div>
        </div>
    </div>
</x-app-layout>
