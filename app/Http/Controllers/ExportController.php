<?php

namespace App\Http\Controllers;
use App\Exports\UserExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ExampleExport; 

class ExportController extends Controller
{
        public function index()
        {
            return view('export');
        }

        public function export()
        {
            return Excel::download(new UserExport, 'users.xlsx');
        }
}
