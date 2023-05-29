@extends('layouts.plantilla')

@section('title', 'create')

@section('content')
    <div class="min-h-screen bg-gradient-to-r from-purple-300 via-gray-300 to-teal-300">
        <div class="container">
            <div class="grid grid-cols-12">
                <div class="col-span-3 col-start-1">
                    <a href="{{route('respuestas.index')}}" class="bg-blue-400 px-4 py-2 text-sm uppercase font-bold text-cyan-50 rounded-lg text-center"><-- volver a las respuestas</a> 
                </div>
            </div>
        </div>
        <div class="container">
            <div class="grid grid-cols-12">            
                    
                <div class="col-span-6  col-start-4">
                    <div class="border-t-2 border-r-2 border-l-2 border-dashed">
                        <br>
                        Aqui se crean las respuestas
                    </div>
                    <div class="container">
                                              
                        <form action="{{route('respuestas.store')}}" method="POST">
                            @csrf
                            <br>
                            <div class="grid grid-cols-12 border-2 border-dashed items-center justify-center">
                                <div class="col-start-5 col-span-3">
                                    <br>
                                    <label>
                                        Texto:
                                        <input type="text" name="name" value="{{old('texto')}}">
                                    </label>
                                </div>
                            <br>
                            <label>            
                                <input type="hidden" name="estado" value="1">
                            </label>  
                            <br>
                            <div class="col-start-5 col-span-3">
                            
                            <div class="col-span-5"></div>
                            <div>
                                <br>

                                <button type="submit" class="bg-blue-400 w-[206px] h-10 rounded-lg text-center">Publicar respuesta</button>
                                <br><br>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
  
    </div>
@endsection
