<?php

use Illuminate\Support\Facades\Route;

Route::get('/','principal')->name('rutaPrincipal');
Route::get('/registroLibro','registroLibro')->name('rutaRegistroLibro');
Route::post('/enviarLibro','procesarLibro');
