@extends('layouts.plantilla')

@section('title', 'Encuestas')

@section('content')
    <div class="min-h-screen bg-gradient-to-r from-purple-300 via-gray-300 to-teal-300">
        <div class="container">
            <br><br>
            <div class="grid grid-cols-12">
                <div class="col-span-8 col-start-3">
                    <div class="container">
                        <div class="grid grid-cols-1 border-2 border-dashed">
                            <div>
                                <h1 class="text-3xl font-semibold">Encuestas para el seguimiento de egresados</h1>
                                <br>
                                <a href="{{ route('encuestas.create') }}" class="bg-blue-400 px-4 py-2 text-sm uppercase font-bold text-cyan-50 rounded-lg text-center">Crear encuesta</a>
                                <br><br>
                            </div>
                        </div>
                    </div>

                    @foreach ($encuestas as $encuesta)
                        {{-- Enlistado de encuestas --}}
                        <div class="container">
                            <div class="grid grid-cols-12 border-b-2 border-r-2 border-l-2 border-dashed">
                                <div class="col-span-8 col-start-2">
                                    <div class=" ">
                                        <li><a href="{{ route('encuestas.show', $encuesta->id) }}">{{ $encuesta->name }}</a></li>
                                    </div>
                                </div>
                                <div class="col-span-2 col-start-12">
                                    <div class="">
                                        <form action="{{ route('encuestas.cambiarEstado', $encuesta->id) }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="estado" value="0">
                                            <button type="submit" class="bg-red-400 rounded-lg text-center">Desactivar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

    

