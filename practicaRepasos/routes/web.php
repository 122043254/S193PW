<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::view('/','welcome')->name('rutaInicio');
Route::view('/repaso1','repaso1')->name('rutaRepaso1');
