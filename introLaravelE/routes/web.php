<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

route::get('/', [ClienteController::class, 'home'])->name('rutaInicio');
Route::get('/form', [ClienteController::class, 'create'])->name('rutaFormulario');
Route::resource('cliente', ClienteController::class);