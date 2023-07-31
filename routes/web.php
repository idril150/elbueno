<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EncuestaController;
use App\Http\Controllers\PreguntaController;
use App\Http\Controllers\responderController;
use App\Http\Controllers\RespuestaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ExportController;
use App\Models\Respuesta;
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
Route::get('/pruebas', function () {
    return view('pruebas');
});

Route::get('/', function () {
    return view('welcome');
});

// Rutas para la creacion y edicion de encuestas
Route::resource('encuestas', EncuestaController::class)->middleware('can:encuestas.index'); 
Route::put('encuestas/{encuesta}', [EncuestaController::class, 'update'])->name('encuestas.update');

Route::post('encuestas/{encuesta}', [EncuestaController::class, 'cambiarEstado'])->name('encuestas.cambiarEstado');
Route::post('encuestas/{encuesta}/guardarRespuestas', [EncuestaController::class, 'guardarRespuestas'])->name('encuestas.guardarRespuestas');

// Rutas para la creacion y edicion de // Rutas para la creacion y edicion de encuestas
Route::resource('preguntas', PreguntaController::class)->middleware('can:preguntas.index')->except(['Create']);
Route::get('preguntas/create/{id_encuesta}', [PreguntaController::class, 'create'])->name('preguntas.create');
Route::post('preguntas/{pregunta}', [PreguntaController::class, 'cambiarestado'])->name('preguntas.cambiarEstado');

// Rutas para la creacion y edicion de respuestas
Route::get('respuestas/create/{pregunta_id}', [RespuestaController::class, 'create'])->name('respuestas.createe');
Route::resource('respuestas', RespuestaController::class);
Route::put('respuestas/{pregunta}', [RespuestaController::class, 'cambiarestado'])->name('respuestas.cambiarEstado');

// Rutas para responder las preguntas
Route::resource('responders', responderController::class)->middleware('can:responders.index');

// Rutas para la creacion y edicion de usuarios
Route::resource('users', UserController::class)->middleware('can:users.index');
Route::put('/users/{user}', [UserController::class, 'actualizar'])->name('users.actualizar');
Route::get('/users/{user}', 'UserController@show')->name('users.show');


// Rutas de breeze para el login y el perfil del usuario
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rutas para exportar los reportes
Route::get('/export/index', [ExportController::class, 'index'])->name('index');
Route::get('/export', [ExportController::class, 'export'])->name('export');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
