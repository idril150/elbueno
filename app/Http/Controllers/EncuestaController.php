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

class EncuestaController extends Controller
{
    public function index(){
        $user = auth()->user();
        $encuestas = Encuesta::where('estado', 1)/*->where('carrera', $user->carrera)*/->orderBy('id', 'desc')->paginate();
        return view('encuestas.index', compact('encuestas'));
    }

    public function create(){
        $carreras = Carrera::pluck('nombre')->toArray();
        return view('encuestas.create', compact('carreras'));
    }

    public function store(StoreEncuesta $request)
{     
    // Crear una nueva instancia de la encuesta
    $encuesta = Encuesta::create($request->all());

    // Agrega aquí los campos adicionales de la encuesta

    // Guardar la encuesta en la base de datos
    $encuesta->save();

    return redirect()->route('encuestas.show', $encuesta->id)->with('success', 'Encuesta creada exitosamente.');
}


    public function show($id){
    $encuesta = Encuesta::findOrFail($id);
    $preguntas = $encuesta->preguntas->where('estado', 1);
    return view('encuestas.show', compact('encuesta', 'preguntas'));
    }

    public function edit(Encuesta $encuesta){
        $carreras = Carrera::pluck('nombre')->toArray();
        return view('encuestas.edit', compact('encuesta', 'carreras'));
    }

    public function update(Request $request,Encuesta $encuesta){
        // $request->validate([
        //     'name' => 'required',
        //     'periodo' => 'required',
        //     'estado' => 'required'
        // ]);
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
