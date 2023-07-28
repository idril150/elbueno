@extends('layouts.plantilla')

@section('title', 'Usuario')

@section('content')
<div class="min-h-screen bg-gradient-to-r from-purple-300 via-gray-300 to-teal-300">
    <br><br>
    <div class="container mx-auto">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Listado de usuarios</h2>
                </div>
            </div>
        </div>
        <table class="table table-bordered mx-auto my-4">
            <thead>
                <tr>
                    <th class="px-4 py-2">Numero de control</th>
                    <th class="px-4 py-2">Nombre</th> <!-- Nueva columna para el nombre del usuario -->
                    <th class="px-4 py-2">Usuario Email</th>
                    <th class="px-4 py-2">Teléfono</th>
                    <th class="px-4 py-2">Carrera</th>
                    <th class="px-4 py-2" width="280px">Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td class="border px-4 py-2">{{ $user->Ncontrol }}</td>
                        <td class="border px-4 py-2">{{ $user->name }}</td> <!-- Mostrar el nombre del usuario -->
                        <td class="border px-4 py-2">{{ $user->email }}</td>
                        <td class="border px-4 py-2">{{ $user->telefono }}</td>
                        <td class="border px-4 py-2">{{ $user->carrera }}</td>
                        <td class="border px-4 py-2">
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                @can('users.edit')                                
                                <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="{{ route('users.edit', $user->id) }}">Editar</a>
                                @csrf
                                @endcan
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
