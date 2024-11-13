<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;

Route::get('/',[ControladorVistas::class,'principal'])->name('rutaPrincipal');
Route::get('/registroLibro',[ControladorVistas::class,'registroLibro'])->name('rutaRegistroLibro');
Route::post('/enviarLibro',[ControladorVistas::class,'procesarLibro']);