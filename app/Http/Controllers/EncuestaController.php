<?php

namespace App\Http\Controllers;

use App\Models\Encuesta;
use Illuminate\Http\Request;
use App\Rules\AllQuestionsAnsweredRule;
use App\Http\Requests\StoreEncuesta;
use App\Models\Pregunta;
use App\Models\Responde;
use App\Models\Respuesta;

class EncuestaController extends Controller
{
    public function index(){
        // $user = auth()->user();
        $encuestas = Encuesta::where('estado', 1)/*->where('carrera', $user->carrera)*/->orderBy('id', 'desc')->paginate();
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

    public function responder(){
       $encuestas = Encuesta::where('estado', 1)/*->where('carrera', $user->carrera)*/->orderBy('id', 'desc')->paginate();
        return view('responders.index', compact('encuestas'));
        
     }

    public function guardarRespuestas(Responde $responde, Request $request){
        $user_id = auth()->id(); // Obtener el ID del usuario autenticado
        $respuestas = $request->input('respuestas', []);
        foreach ($respuestas as $preguntaId => $respuestaValues) {
            $pregunta = Pregunta::findOrFail($preguntaId);
    
            if ($pregunta->tipo == 1) {
                // Pregunta cerrada
                    $responde = new Responde();
                    $responde->user_id = $user_id;
                    $responde->respuesta_id = $respuestaValues;
                    $responde->save();
                
            } else {
                // dd($respuestaValues);                   
                    $respuesta = new Respuesta();
                    $respuesta->texto = $respuestaValues;
                    $respuesta->pregunta_id = $preguntaId;
                    $respuesta->estado = 1;
                    $respuesta->save();
    
                    $responde = new Responde();
                    $responde->user_id = $user_id;
                    $responde->respuesta_id = $respuesta->id;
                    $responde->save();
            }
        }
    
        return "Respuestas guardadas exitosamente.";
    
    }
}
