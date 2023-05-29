@extends('layouts.plantilla')

@section('title', 'edit')

@section('content')

<div class="min-h-screen bg-gradient-to-r from-purple-300 via-gray-300 to-teal-300">
    <div class="container">
        <div class="grid grid-cols-12">
            <div class="col-span-3 col-start-1">
                <a href="{{route('encuestas.show',$pregunta->encuesta_id)}}" class="bg-blue-400 px-4 py-2 text-sm uppercase font-bold text-cyan-50 rounded-lg text-center"><-- volver a la encuesta</a> 
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
                    
                    
                            <form action="{{route('preguntas.update', $pregunta)}}" method="post">
                                @csrf
                                @method('put')
                                <div class="grid grid-cols-12 border-2 border-dashed items-center justify-center">
                                <div class="col-start-5 col-span-3">
                                    <br>
                                    <label>
                                        Nombre:
                                        <input type="text" name="texto" value="{{old('texto',$pregunta->texto)}}">
                                    </label>
                                </div>
                                <div class="col-span-5"></div>
                                <div class="col-start-5 col-span-3">
                                    <br>
                                    <label>
                                        tipo abierta:
                                        <input type="checkbox" name="tipo" value="1">
                                    </label>  
                                <div class="col-span-5">
                                </div>
                                <div class="col-start-5 col-span-3">                                
                                    <br>
                                    <label>
                                        tipo cerrada:
                                        <input type="checkbox" name="tipo" value="0">
                                    </label>
                                </div>
                                <div class="col-span-5">                                    
                                    <input type="hidden" name="estado" value="1">
                                </div>
                                <br>
                                <button type="submit" class="bg-blue-400 w-[206px] h-10 rounded-lg text-center">actualizar formulario</button>
                                </form>
                            <br><br>
                    </div>
                </div>                
            </div>                   
        </div>
    </div>
</div>


    <h1>en esta pagina se puede editar un formulario</h1>
    <a href="{{route('preguntas.show',$pregunta->id)}}"><-- volver a la pregunta</a>
    <br>
    
        
       
        <br>
        
        <br>
        
        <br>
        <label>
            <input type="hidden" name="estado" value="1">
        </label>

        <br>
        
    </form>
@endsection
