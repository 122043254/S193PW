<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;
use App\Http\Controllers\clienteControlador;

/*Route::get('/', function () {
    return view('inicio');
})->name('rutaInicio');

Route::get('/form', function () {
    return view('formulario');
})->name('rutaForm');

Route::get('/consultar', function () {
    return view('clientes');
})->name('rutaClientes');*/

/*Route::view('/','inicio')->name('rutaInicio');
Route::view('/form','formulario')->name('rutaForm');
Route::view('/consultar','clientes')->name('rutaClientes');*/
Route::view('/component','componentes')->name('rutaComponent');

Route::get('/', [ControladorVistas::class, 'home'])->name('rutaInicio');
Route::get('/form', [ControladorVistas::class, 'formulario'])->name('rutaForm');
//Rutas POST


//Rutas CLIENTES
Route::get('/clientes', [clienteControlador::class, 'index'])->name('rutaClientes');
Route::get('/cliente/create', [clienteControlador::class, 'create'])->name('rutaCrear');
Route::get('/cliente/{id}/edit', [clienteControlador::class, 'edit'])->name('rutaEditar');
Route::post('/clientes', [clienteControlador::class, 'store']);
Route::put('/clientes/{id}', [clienteControlador::class, 'update'])->name('rutaActualizar');
Route::delete('/clientes/{id}', [clienteControlador::class, 'destroy'])->name('rutaEliminar');