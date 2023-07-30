<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Lista de encuestas') }}
        </h2>
    </x-slot>
    <div class="min-h-screen">
        <div class="container mx-auto py-8">
            <div class="grid grid-cols-12">
                <div class="col-span-8 col-start-3">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="grid grid-cols-1 border-2 border-dashed">
                            <div class="py-4">
                                {{-- <h1 class="text-3xl font-semibold">Encuestas para el seguimiento de egresados</h1> --}}
                                <br>
                                <a href="{{ route('encuestas.create') }}" class="px-4 py-2 text-sm uppercase font-bold text-white bg-blue-400 rounded-lg">Crear encuesta</a>
                                <br><br>
                            </div>
                        </div>
                    </div>

                    <table class="w-full divide-y divide-gray-200 table-fixed">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="w-2/3 px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider bg-white text-black">
                                    Nombre de la Encuesta
                                </th>
                                <th scope="col" class="w-1/3 px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider bg-white text-black">
                                    Acción
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @foreach ($encuestas as $encuesta)
                                <tr>
                                    <td class="px-4 py-3 whitespace-nowrap bg-white">
                                        <div class="text-lg font-semibold">
                                            <a href="{{ route('encuestas.show', $encuesta->id) }}" class="text-gray-900">{{ $encuesta->name }}</a>
                                        </div>
                                    </td>
                                    <td class="px-4 py-3 whitespace-nowrap bg-white">
                                        <form action="{{ route('encuestas.cambiarEstado', $encuesta->id) }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="estado" value="0">
                                            <button type="submit" class="px-4 py-2 text-sm font-bold bg-red-400 rounded-lg text-white">Desactivar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
