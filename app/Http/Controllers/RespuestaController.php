<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRespuesta;
use App\Models\Respuesta;
use Illuminate\Http\Request;

class RespuestaController extends Controller
{
    public function index(){
        $preguntas = Respuesta::orderBy('id','desc')->paginate();


        
        return view('preguntas.index', compact('preguntas'));
    }

    public function create(){
        return view('preguntas.create');
    }

    public function store(StoreRespuesta $request){     
        
        
        $pregunta = Respuesta::create($request->all());

        // return $pregunta;

        return redirect()->route('preguntas.show', $pregunta);
    }

    public function show (Respuesta $pregunta){
        return view('preguntas.show', compact('pregunta'));
    }

    public function edit(Respuesta $pregunta){
        
        return view('preguntas.edit', compact('pregunta'));
    }
}
