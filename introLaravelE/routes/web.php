<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

route::get('/', [ClienteController::class, 'home'])->name('rutaInicio');
Route::resource('cliente', ClienteController::class);