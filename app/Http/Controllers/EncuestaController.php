<?php

namespace App\Http\Controllers;

use App\Models\Encuesta;
use Illuminate\Http\Request;

use App\Http\Requests\StoreEncuesta;


class EncuestaController extends Controller
{
    public function index(){
        $encuestas = Encuesta::orderBy('id','desc')->paginate();


        return view('encuestas.index', compact('encuestas'));
    }

    public function create(){
        return view('encuestas.create');
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

    public function destroy(Encuesta $encuesta){
        $encuesta->delete();
        return redirect()->route('encuestas.index');
    }
}
