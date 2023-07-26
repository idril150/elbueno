@extends('layouts.plantilla')

@section('content')
    <div class="container">
        <h2>Editar Usuario</h2>
        <form action="{{ route('users.actualizar', $user->id) }}" method="post">
            @csrf
            @method('put')
        
            <!-- Aquí coloca los campos de edición del usuario -->
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" name="name" id="name" value="{{ $user->name }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="email">Correo electrónico:</label>
                <input type="email" name="email" id="email" value="{{ $user->email }}" class="form-control">
            </div>

            <!-- Agrega aquí más campos de edición si es necesario -->

            <button type="submit" class="btn btn-primary">Guardar cambios</button>
        </form>
    </div>
@endsection
