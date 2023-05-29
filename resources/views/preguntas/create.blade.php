@extends('layouts.plantilla')

@section('title', 'create')

@section('content')

<div class="min-h-screen bg-gradient-to-r from-purple-300 via-gray-300 to-teal-300">
    <div class="container">
        <div class="grid grid-cols-12">
            <div class="col-span-3 col-start-1">
                <a href="{{route('encuestas.show',$encuesta_id)}}" class="bg-blue-400 px-4 py-2 text-sm uppercase font-bold text-cyan-50 rounded-lg text-center"><-- volver a la encuesta</a> 
            </div>
        </div>
    </div>

    <div class="container">
        <div class="grid grid-cols-12">            
                
            <div class="col-span-6  col-start-4">
                <div class="border-t-2 border-r-2 border-l-2 border-dashed">
                    <br>
                    <h1>en esta pagina se puede crear un formulario</h1>
                </div>
                <div class="container">
                    
                    
                            <form action="{{route('preguntas.store')}}" method="POST">
                                @csrf
                                <div class="grid grid-cols-12 border-2 border-dashed items-center justify-center">
                                <div class="col-start-5 col-span-3">
                                    <br>
                                    <label>
                                        pregunta:
                                        <input type="text" name="texto" value="{{old('texto')}}">
                                    </label>
                                </div>
                                <div class="col-span-5"></div>
                                <div class="col-start-5 col-span-3">
                                    <br>
                                    <label>
                                        cerrada:
                                        <input type="checkbox" name="tipo" value="1">
                                    </label>    
                                <div class="col-span-5">
                                </div>
                                <div class="col-start-5 col-span-3">                                
                                    <br>
                                    <label>
                                        abierta:
                                        <input type="checkbox" name="tipo" value="0">
                                    </label>
                                </div>
                                <div class="col-span-5"><input type="hidden" name="encuesta_id" value="{{ $encuesta_id }}">
                                <input type="hidden" name="estado" value="1">
                                </div>
                                <br>
                                <button type="submit" class="bg-blue-400 w-[206px] h-10 rounded-lg text-center">enviar formulario</button>
                                </form>
                            <br><br>
                    </div>
                </div>                
            </div>                   
        </div>
    </div>
</div>

@endsection
