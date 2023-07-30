{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Lista de usuarios') }}
        </h2>
    </x-slot>
    <div class="min-h-screen"> 
        <div class="py-12">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="w-full overflow-x-auto">
                        <table class="w-full divide-y divide-gray-200 table-fixed">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="w-1/6 px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Numero de control
                                </th>
                                <th scope="col" class="w-1/6 px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Nombre
                                </th>
                                <th scope="col" class="w-1/6 px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Usuario Email
                                </th>
                                <th scope="col" class="w-1/6 px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Teléfono
                                </th>
                                <th scope="col" class="w-1/6 px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Carrera
                                </th>
                                <th scope="col" class="w-1/6 px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Acción
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @foreach ($users as $user)
                                <tr>
                                    <td class="px-4 py-3 whitespace-nowrap">
                                        {{ $user->Ncontrol }}
                                    </td>
                                    <td class="px-4 py-3 whitespace-nowrap">
                                        {{ $user->name }}
                                    </td>
                                    <td class="px-4 py-3 whitespace-nowrap">
                                        {{ $user->email }}
                                    </td>
                                    <td class="px-4 py-3 whitespace-nowrap">
                                        {{ $user->telefono }}
                                    </td>
                                    <td class="px-4 py-3 whitespace-nowrap">
                                        {{ $user->carrera }}
                                    </td>
                                    <td class="px-4 py-3 whitespace-nowrap">
                                        @can('users.edit')
                                            <a href="{{ route('users.edit', $user->id) }}" class="px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded">Editar</a>
                                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" onclick="return confirm('¿Estás seguro de que deseas eliminar este usuario?')" class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded">Eliminar</button>
                                            </form>
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
 --}}
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