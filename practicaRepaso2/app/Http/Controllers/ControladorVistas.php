<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorLibro;

class ControladorVistas extends Controller
{
    public function principal()
    {
        return view('principal');
    }

    public function registroLibro()
    {
        return view('registroLibro');
    }

    public function procesarLibro(validadorLibro $requestV)
    {
        $libro = $requestV->input('txttitulo');

        session()->flash('exito', 'Todo correcto: Libro "' . $libro . '" guardado');

        return to_route('rutaRegistroLibro');
    }

}
