<?php

namespace App\Http\Controllers;

use App\Models\Encuesta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class responderController extends Controller
{

    public function index(){
       // $user = auth()->user();
       $encuestas = Encuesta::where('estado', 1)/*->where('carrera', $user->carrera)*/->orderBy('id', 'desc')->paginate();
       return view('responders.index', compact('encuestas'));
       
    }

    public function show($id){
        $encuesta = Encuesta::findOrFail($id);
        $preguntas = $encuesta->preguntas->where('estado', 1);
        return view('responders.show', compact('encuesta', 'preguntas'));
        }
}
