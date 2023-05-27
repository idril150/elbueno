<?php

namespace App\Http\Controllers;

use App\Models\Encuesta;
use Illuminate\Http\Request;

use App\Http\Requests\StoreEncuesta;


class EncuestaController extends Controller
{
    public function index(){
        $encuestas = Encuesta::where('estado', 1)->orderBy('id', 'desc')->paginate();
        return view('encuestas.index', compact('encuestas'));
    }

    public function create(){
        return view('encuestas.create');
    }

    public function store(StoreEncuesta $request){     
        
        $encuesta = Encuesta::create($request->all());

        return redirect()->route('encuestas.show', $encuesta);
    }

    public function show($id){
    $encuesta = Encuesta::findOrFail($id);
    $preguntas = $encuesta->preguntas->where('estado', 1);
    return view('encuestas.show', compact('encuesta', 'preguntas'));
    }

    public function edit(Encuesta $encuesta){
        
        return view('encuestas.edit', compact('encuesta'));
    }

    public function update(Request $request,Encuesta $encuesta){

        $request->validate([
            'name' => 'required',
            'periodo' => 'required',
            'estado' => 'required'
        ]);
        
        $encuesta->update($request->all());
        return redirect()->route('encuestas.show', $encuesta);
    }

    public function cambiarEstado(Encuesta $encuesta, Request $request){
        $encuesta->estado = $request->estado;
        $encuesta->save();
        return redirect()->route('encuestas.index', $encuesta);
    }

    // public function destroy(Encuesta $encuesta){
    //     $encuesta->delete();
    //     return redirect()->route('encuestas.index');
    // }
}
