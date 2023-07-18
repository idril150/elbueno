<?php

namespace App\Exports;

use App\Models\Encuesta;
use Maatwebsite\Excel\Concerns\FromCollection;

class EncuestasExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Encuesta::all();
    }
}
