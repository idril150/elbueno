<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEncuesta;
use App\Models\Encuesta;
use Illuminate\Http\Request;

class EncuestaController extends Controller
{
    public function index(){
        $encuestas = Encuesta::orderBy('id','desc')->paginate();
        return view('encuestas.index', compact('encuestas'));
    }
    
    public function create(){
        return view('encuestas.create');
    
    }

    public function store(StoreEncuesta $request){

        $encuesta = Encuesta::create($request->all());

        return redirect()->route('encuestas.show', $encuesta);
        
    }

    public function show (Encuesta $encuesta){
        return view('encuestas.show', compact('encuesta'));
    }

    public function edit(){
        return view('encuestas.edit');
    }
}
