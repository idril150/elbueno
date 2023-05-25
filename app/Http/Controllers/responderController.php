<?php

namespace App\Http\Controllers;

use App\Models\Encuesta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class responderController extends Controller
{

    public function index(){
        $carreraUsuario = Auth::user()->carrera;
        $encuestas = Encuesta::where('estado', 1)->where('carrera',$carreraUsuario)->orderBy('id', 'desc')->paginate();
        return view('responders.index', compact('encuestas'));
    }

    public function show($id){
        $encuesta = Encuesta::findOrFail($id);
        $preguntas = $encuesta->preguntas->where('estado', 1);
        return view('responder.show', compact('encuesta', 'preguntas'));
        }
}
