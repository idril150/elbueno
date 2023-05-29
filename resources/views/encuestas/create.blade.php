@extends('layouts.plantilla')

@section('title', 'create')

@section('content')
<div class="min-h-screen bg-gradient-to-r from-purple-300 via-gray-300 to-teal-300">
    <div class="container">
        <div class="grid grid-cols-12">
            <div class="col-span-3 col-start-1">
                <a href="{{route('encuestas.index')}}" class="bg-blue-400 px-4 py-2 text-sm uppercase font-bold text-cyan-50 rounded-lg text-center"><-- volver a la encuesta</a> 
            </div>
        </div>
    </div>

    <div class="container">
        <div class="grid grid-cols-12">            
                
            <div class="col-span-6  col-start-4">
                <div class="border-t-2 border-r-2 border-l-2 border-dashed">
                    <br>
                    editar informacion de la encuesta:
                </div>
                <div class="container">
                    
                    
                            <form action="{{route('encuestas.store')}}" method="post">
                                @csrf
                                @method('put')
                                <div class="grid grid-cols-12 border-2 border-dashed items-center justify-center">
                                <div class="col-start-5 col-span-3">
                                    <br>
                                    <label>
                                        Nombre:
                                        <input type="text" name="name" value="{{old('name')}}">
                                    </label>
                                </div>
                                <div class="col-span-5"></div>
                                <div class="col-start-5 col-span-3">
                                    <br>
                                    <label class="col-span-5">
                                        periodo:
                                        <input type="text" x-1 name="periodo" rows="5" value="{{old('name')}}"></textarea>
                                    </label>
                                <div class="col-start-5 col-span-3">
                                </div>
                                <div class="col-span-5"></div>
                                <div>
                                    <br>
                                    <label >
                                        Area
                                        <input type="text" name="carrera" value="{{old('carrera')}}">
                                    </label>
                                </div>
                                <label>
                                    <br>
                                    <input type="hidden" name="estado" value="1">
                                </label>     
                            
                                <button type="submit" class="bg-blue-400 w-[206px] h-10 rounded-lg text-center">Publicar Encuestas</button>
                                <br><br>
                            </form>
                    </div>
                </div>                
            </div>                   
        </div>
    </div>
</div>
@endsection
