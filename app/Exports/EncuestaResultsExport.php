<?php

namespace App\Exports;

use App\Models\Encuesta;
use App\Models\Pregunta;
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
        return view('export.encuesta_results', [
            'encuesta' => $this->encuesta,
            'preguntas' => $this->preguntas,
        ]);
    }
}