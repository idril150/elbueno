<?php

namespace App\Exports;

use App\Models\Encuesta;
use App\Models\Pregunta;
use App\Models\Responde;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;
use App\Http\Controllers\EncuestaController;
use App\Http\Controllers\PreguntaController;


class EncuestaResultsExport implements FromView
{
    use Exportable;

    protected $encuesta;
    protected $preguntas;
    
    public function __construct(Encuesta $encuesta, $preguntas)
    {
        $this->encuesta = $encuesta;
        $this->preguntas = $preguntas;
    }

    public function view(): View
    {
        $respuestas = Responde::select('users.Ncontrol', 'users.name', 'respuestas.*')
            ->join('users', 'users.id', 'respondes.user_id')
            ->join('respuestas', 'respuestas.id', 'respondes.respuesta_id')
            ->join('preguntas', 'preguntas.id', 'respuestas.pregunta_id')
            ->where('preguntas.encuesta_id', $this->encuesta->id)
            ->get();

            
        $personas = Responde::select('users.Ncontrol',)
            ->join('users', 'users.id', 'respondes.user_id')
            ->join('respuestas', 'respuestas.id', 'respondes.respuesta_id')
            ->join('preguntas', 'preguntas.id', 'respuestas.pregunta_id')
            ->where('preguntas.encuesta_id', $this->encuesta->id)
            ->groupBy('users.Ncontrol')
            ->get();

        //$personas = $respuestas->groupBy('Ncontrol');
        return view('export.encuesta_results', [
            'encuesta' => $this->encuesta,
            'preguntas' => $this->preguntas,
            'respuestas' => $respuestas,
            'personas' => $personas
        ]);
    }
}