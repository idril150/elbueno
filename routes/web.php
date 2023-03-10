<?php

use App\Http\Controllers\EncuestaController;
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

Route::get('encuestas',[EncuestaController::class,'index'])->name('encuestas.index');
Route::get('encuestas/create',[EncuestaController::class,'create'])->name('encuestas.create');
Route::post('encuestas', [EncuestaController::class,'store'])->name('encuestas.store');

Route::get('encuestas/{encuesta}',[EncuestaController::class,'show'])->name('encuestas.show');


