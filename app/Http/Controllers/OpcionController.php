<?php

namespace App\Http\Controllers;

use App\Models\Encuesta;
use App\Models\Opcion;
use Illuminate\Http\Request;

class OpcionController extends Controller
{
    public function store(Encuesta $encuesta, Request $request)
    {
        $resp = new Opcion(['resp' => $request->input('resp')]);

        $resp->resp()->save($resp);

        return redirect()->route('encuestas.show', $resp);
    }

    public function destroy(Encuesta $encuesta, Opcion $resp)
    {
        $resp->delete();

        return redirect()->route('encuestas.show', $encuesta);
    }
}
