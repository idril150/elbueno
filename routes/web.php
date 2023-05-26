<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EncuestaController;
use App\Http\Controllers\PreguntaController;
use App\Http\Controllers\responderController;
use App\Http\Controllers\RespuestaController;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('encuestas', EncuestaController::class); 
Route::post('encuestas/{encuesta}', [EncuestaController::class, 'cambiarEstado'])->name('encuestas.cambiarEstado');

Route::resource('preguntas', PreguntaController::class)->except(['Create']);
Route::get('preguntas/create/{id_encuesta}', [PreguntaController::class, 'create'])->name('preguntas.create');

// Route::put('preguntas/{pregunta}', [PreguntaController::class, 'cambiarestado'])->name('preguntas.cambiarestado');



Route::get('respuestas/create/{pregunta_id}', [RespuestaController::class, 'create'])->name('respuestas.createe');

Route::resource('respuestas', RespuestaController::class);


Route::resource('responders', responderController::class);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
