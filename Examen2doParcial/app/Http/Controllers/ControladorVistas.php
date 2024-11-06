<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorVistas extends Controller
{

    public function inicio()
    {
        return view('inicio');
    }

    public function procesarPrendas(request $request)
    {
        $validacion = $request->validate([
            'txtprenda' => 'required|string',
            'txtcolor' => 'required|string',
            'txtcantidad' => 'required|numeric'
        ]);

        $prenda = $peticion->input('txtprenda');

        session->flash('exito','Se guardo la prendra: '.$prenda);

        return to_route('');

    }

}
