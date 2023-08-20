<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRespuesta;
use App\Models\Respuesta;
use Illuminate\Http\Request;

class RespuestaController extends Controller
{
    public function index(){
        $respuestas = Respuesta::orderBy('id','desc')->paginate();        
        return view('respuestas.index', compact('respuestas'));
    }


    public function create($pregunta_id){
        
        //return view('respuestas.create');
        return view('respuestas.create', compact('pregunta_id'));
    }

    public function store(StoreRespuesta $request){     
        
        

        $respuesta = Respuesta::create($request->all());
        $pregunta = $respuesta->pregunta;
        $encuestaId = $pregunta->encuesta_id;
        // return $respuesta;

        return redirect()->route('encuestas.show', $encuestaId);
    }

    public function show (Respuesta $respuesta){
        return view('respuestas.show', compact('respuesta'));
    }

    public function edit(Respuesta $respuesta){
        
        return view('respuestas.edit', compact('respuesta'));
    }

    public function update(Request $request, Respuesta $respuesta){
        $respuesta->texto = $request->input('respuesta_texto');
        $respuesta->save();
    
        return redirect()->back()->with('success', 'La respuesta ha sido actualizada correctamente.');
    }

    public function cambiarEstado(Respuesta $respuesta, Request $request){
        
        $respuesta->estado = $request->estado;        
        $respuesta->save();
        return redirect()->back();  
    }

}
