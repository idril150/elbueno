<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Listado de usuarios') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <x-table :data="$users">
                <x-slot name="header">
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
                </x-slot>

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
                                    <button type="submit" class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded">Eliminar</button>
                                </form>
                            @endcan
                        </td>
                    </tr>
                @endforeach
            </x-table>
        </div>
    </div>
</x-app-layout>