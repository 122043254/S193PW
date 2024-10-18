<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorConvertidor;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::view('/','welcome')->name('rutaInicio');
Route::get('/repaso1',[ControladorConvertidor::class, 'mostrarConvertidor'])->name('rutaRepaso1');
Route::post('/convertir', [ControladorConvertidor::class, 'convertir'])->name('convertir');