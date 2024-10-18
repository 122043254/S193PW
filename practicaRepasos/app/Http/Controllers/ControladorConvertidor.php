<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorConvertidor extends Controller
{

    public function mostrarConvertidor()
    {
        return view('repaso1');
    }

    public function convertir(Request $request)
    {
        $unidadOrigen = $request->input('unidadOrigen');
        $unidadDestino = $request->input('unidadDestino');
        $txtentrada = $request->input('txtentrada');

        $resultado = 0;

        if ($unidadOrigen == 'MB' && $unidadDestino == 'GB') {
            $resultado = $txtentrada / 1024;
        } elseif ($unidadOrigen == 'GB' && $unidadDestino == 'MB') {
            $resultado = $txtentrada * 1024;
        } elseif ($unidadOrigen == 'GB' && $unidadDestino == 'TB') {
            $resultado = $txtentrada / 1024;
        } elseif ($unidadOrigen == 'TB' && $unidadDestino == 'GB') {
            $resultado = $txtentrada * 1024;
        } elseif ($unidadOrigen == $unidadDestino) {
            $resultado = $txtentrada;
        }  else {
            $resultado = 0;
        }

        //return view('repaso1', ['resultado' => $resultado]);
        //return redirect()->route('rutaRepaso1')->with('resultado', $resultado);
        return $resultado;
    }

}
