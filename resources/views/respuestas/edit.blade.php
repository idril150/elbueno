@extends('layouts.plantilla')

@section('title', 'edit')

@section('content')
<div class="min-h-screen bg-gradient-to-r from-purple-300 via-gray-300 to-teal-300">
    <div class="container">
        <div class="grid grid-cols-12">
            <div class="col-span-3 col-start-1">
                <a href="#" onclick="history.back();" class="bg-blue-400 px-4 py-2 text-sm uppercase font-bold text-cyan-50 rounded-lg text-center"><-- volver a la encuesta</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="grid grid-cols-12">            
                
            <div class="col-span-6  col-start-4">
                <div class="border-t-2 border-r-2 border-l-2 border-dashed">
                    <br>
                    <h1>en esta pagina se puede crear una respuesta</h1>
                </div>
                <div class="container">
                    
                    
                            <form action="{{route('respuestas.update', $respuesta)}}" method="post">
                                @csrf
                                @method('put')
                                <div class="grid grid-cols-12 border-2 border-dashed items-center justify-center">
                                <div class="col-start-5 col-span-3">
                                    <br>
                                    <label>
                                        texto:
                                        <input type="text" name="texto" value="{{old('texto',$respuesta->texto)}}"">                                        
                                    </label>
                                </div>
                                <div class="col-span-5"></div>
                                <div class="col-start-5 col-span-3">  
                                <div class="col-span-5">
                                </div>
                                <div class="col-start-5 col-span-3">                                                                    
                                </div>
                               
                                <br>
                                <button type="submit" class="bg-blue-400 w-[206px] h-10 rounded-lg text-center">Actualizar respuesta</button>
                                </form>
                            <br><br>
                    </div>
                </div>                
            </div>                   
        </div>
    </div>
</div>


@endsection
