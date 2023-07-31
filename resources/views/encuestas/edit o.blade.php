@extends('layouts.plantilla')

@section('title', 'edit')

@section('content')
    <div class="min-h-screen bg-blue-100">
        <div class="container mx-auto">
            <a href="{{ route('encuestas.show', $encuesta->id) }}" class="bg-blue-400 px-4 py-2 text-sm uppercase font-bold text-cyan-50 rounded-lg text-center">← Volver a la encuesta</a>

            <div class="col-span-6 col-start-4 mt-8">
                <div class="border-t-2 border-r-2 border-l-2 border-dashed">
                    <br>
                    Editar información de la encuesta: {{ $encuesta->name }}
                </div>
                <div class="container mt-4">
                    <form action="{{ route('encuestas.update', $encuesta) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="grid grid-cols-12 border-2 border-dashed items-center justify-center">
                            <div class="col-start-5 col-span-3">
                                <br>
                                <label>
                                    Nombre:
                                    <input type="text" name="name" value="{{ old('name', $encuesta->name) }}" class="form-input rounded-md shadow-sm w-full">
                                </label>
                            </div>
                            <div class="col-span-5"></div>
                            <div class="col-start-5 col-span-3">
                                <br>
                                <label>
                                    Periodo:
                                    <input type="text" name="periodo" value="{{ old('periodo', $encuesta->periodo) }}" class="form-input rounded-md shadow-sm w-full">
                                </label>
                            </div>
                            <div class="col-start-5 col-span-3">
                                <br>
                                <label>
                                    Área:
                                    <input type="text" name="carrera" value="{{ old('carrera', $encuesta->carrera) }}" class="form-input rounded-md shadow-sm w-full">
                                </label>
                            </div>
                            <label>
                                <br>
                                <input type="hidden" name="estado" value="1">
                            </label>
                            <button type="submit" class="bg-blue-400 w-[206px] h-10 rounded-lg text-center">Actualizar formulario</button>
                            <br><br>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
