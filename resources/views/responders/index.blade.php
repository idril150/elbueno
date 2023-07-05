@extends('layouts.plantilla')

@section('title', 'Encuestas')

@section('content')

<div class="min-h-screen bg-gradient-to-r from-purple-300 via-gray-300 to-teal-300">
    <br><br>
   
    <div class="container">
        <div class="grid grid-cols-12">            
            
            <div class="col-span-8  col-start-3">
                <div class="container">
                    <div class="grid grid-cols-1 border-2 border-dashed">
                        <div>
                            <h1>Encuestas para el seguimiento de egresados</h1><br>                           
                            <br><br>
                        </div>
                    </div>
                </div>                
  
                @foreach($encuestas as $encuesta)
                <div class="container ">
                    <div class="grid  py-3 border-b-2 border-r-2 border-l-2   border-dashed">
                        <li><a href="{{route('responders.show',$encuesta->id)}} "class="bg-blue-400 px-4 py-2 text-sm uppercase font-bold text-cyan-50 rounded-lg text-center">{{$encuesta->name}} </a></li>
                    </div>                                        
                </div>
                @endforeach
            </div>                   
        </div>
    </div>
</div>


    
            
@endsection


    

