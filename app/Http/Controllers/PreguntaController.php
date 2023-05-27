<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePregunta;
use App\Models\Encuesta;
use App\Models\Pregunta;
use Illuminate\Http\Request;

class PreguntaController extends Controller
{
    public function index(){
        $preguntas = Pregunta::orderBy('id','desc')->paginate();


        
        return view('preguntas.index', compact('preguntas'));
    }

    public function create($encuesta_id){
        return view('preguntas.create', compact('encuesta_id'));
    }

    public function store(StorePregunta $request){     
        
        
        $pregunta = Pregunta::create($request->all());

        //  return $pregunta;

        return redirect()->route('encuestas.show', $pregunta->encuesta_id);
    }

    public function show (Pregunta $pregunta){
        return view('preguntas.show', compact('pregunta'));
    }

    public function edit(Pregunta $pregunta){
        
        return view('preguntas.edit', compact('pregunta'));
    }

    public function update(Request $request,Pregunta $pregunta){

         $pregunta->update($request->all());
        
         return redirect()->route('encuestas.show', $pregunta->encuesta_id);
    }

    public function cambiarEstado(Pregunta $pregunta, Request $request){
        $pregunta->estado = $request->estado;
        $pregunta->save();
        return redirect()->back();
    }

}
