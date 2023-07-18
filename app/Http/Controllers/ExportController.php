<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Exports\EncuestasExport;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function index()
    {
        return view('export');
    }

    public function export()
    {
        return Excel::download(new EncuestasExport,'encuesta.xlsx');
    }
}


