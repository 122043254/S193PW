<?php

use App\Http\Controllers\PrendasController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PrendasController::class, 'home'])->name('rutaInicio');
Route::get('/prendas', [PrendasController::class, 'index'])->name('rutaPrendas');
Route::get('/formPrendas', [PrendasController::class, 'create'])->name('rutaFormPrendas');
Route::post('/procesarPrendas', [PrendasController::class, 'store'])->name('rutaProcesarPrendas');
Route::get('/editarPrendas/{id}', [PrendasController::class, 'edit'])->name('rutaEditarPrendas');
Route::put('/procesarEditarPrendas/{id}', [PrendasController::class, 'update'])->name('rutaProcesarEditarPrendas');
Route::delete('/eliminarPrendas/{id}', [PrendasController::class, 'destroy'])->name('rutaEliminarPrendas');
