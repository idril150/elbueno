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

    public function create(){
        return view('respuestas.create');
    }

    public function store(StoreRespuesta $request){     
        
        
        $respuesta = Respuesta::create($request->all());

        // return $respuesta;

        return redirect()->route('respuestas.show', $respuesta);
    }

    public function show (Respuesta $respuesta){
        return view('respuestas.show', compact('respuesta'));
    }

    public function edit(Respuesta $respuesta){
        
        return view('respuestas.edit', compact('respuesta'));
    }
}
