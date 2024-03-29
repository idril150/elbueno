<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePregunta;
use Spatie\Permission\Models\Role;
use App\Models\Encuesta;
use App\Models\Pregunta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    //     $redirectTo = Auth::user()->type === 'admin' 
    //     ? route('encuestas.show', $pregunta->encuesta_id)
    //     : route('encuestascord.show', $pregunta->encuesta_id);

    // return redirect($redirectTo);
    if (Auth::user()->hasRole('admin')) {
        $redirectTo = route('encuestas.show', $pregunta->encuesta_id);
    } elseif (Auth::user()->hasRole('manager')) {
        $redirectTo = route('encuestascord.show', $pregunta->encuesta_id);
    } else { 
        // Si el usuario no tiene un rol específico, maneja la redirección aquí
    }
    
    return redirect($redirectTo);

        // return redirect()->route('encuestas.show', $pregunta->encuesta_id);
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
