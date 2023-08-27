<?php

namespace App\Http\Controllers;

use App\Models\Encuesta;
use Illuminate\Http\Request;
use App\Rules\AllQuestionsAnsweredRule;
use App\Http\Requests\StoreEncuesta;
use App\Models\Pregunta;
use App\Models\Responde;
use App\Models\Respuesta;
use Illuminate\Support\Facades\Session;
use App\Exports\EncuestaResultsExport;
use App\Models\Carrera;
use Maatwebsite\Excel\Facades\Excel;

class EncuestacordController extends Controller
{
    public function index(){
        $user = auth()->user();
        $encuestas = Encuesta::where('estado', 1)->where('carrera', $user->carrera)->orderBy('id', 'desc')->paginate();
        return view('encuestascord.index', compact('encuestas'));
    }

    public function create(){
        $user = auth()->user();
        $carrera = $user->carrera;        
        return view('encuestascord.create', compact('carrera'));
    }
    

    public function store(StoreEncuesta $request)
{     
    // Crear una nueva instancia de la encuesta
    $encuesta = Encuesta::create($request->all());

    // Guardar la encuesta en la base de datos
    $encuesta->save();

    return redirect()->route('encuestascord.show', $encuesta->id)->with('success', 'Encuesta creada exitosamente.');
}


    public function show($id){
    $encuesta = Encuesta::findOrFail($id);
    $preguntas = $encuesta->preguntas->where('estado', 1);
    return view('encuestascord.show', compact('encuesta', 'preguntas'));
    }

    public function edit($id){       
        // return view('encuestascord.edit', compact('encuesta'));
        // return $encuesta;
        $encuesta = Encuesta::findOrFail($id);
    // Resto del código
        return view('encuestascord.edit', compact('encuesta'));
    }

    public function update(Request $request,Encuesta $encuestascord){        
        
        $encuestascord->update($request->all());
        return redirect()->route('encuestascord.show', $encuestascord);
    }

    public function cambiarEstado(Encuesta $encuesta, Request $request){
        $encuesta->estado = $request->estado;
        $encuesta->save();
        return redirect()->route('encuestascord.index', $encuesta);
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
        Session::flash('success', 'Encuesta respondida exitosamente');

        return view('dashboard');
    
    }

    public function exportResults($id)
    {
        $encuesta = Encuesta::findOrFail($id);
        $preguntas = $encuesta->preguntas;

        return Excel::download(new EncuestaResultsExport($encuesta, $preguntas), 'encuesta_results.xlsx');
    }
}
