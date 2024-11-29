<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorCliente;
use App\Models\cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consulta= cliente::all();
        return view('cliente', compact('consulta'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(validadorCliente $request)
    {
        $addcliente= new cliente();
        $addcliente->nombre= $request->input('txtnombre');
        $addcliente->apellido= $request->input('txtapellidos');
        $addcliente->correo= $request->input('txtcorreo');
        $addcliente->telefono= $request->input('txttelefono');
        $addcliente->save();

        $msj= $request->input('txtnombre');
        session()->flash('exito','Se guardo el usuario: '.$msj);
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cliente $cliente)
    {
        $cliente = cliente::findOrFail($cliente);
        return view('formularioEditar', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cliente $cliente)
    {
        $cliente = cliente::findOrFail($cliente);
        $cliente->nombre= $request->input('txtnombre');
        $cliente->apellido= $request->input('txtapellidos');
        $cliente->correo= $request->input('txtcorreo');
        $cliente->telefono= $request->input('txttelefono');
        $cliente->save();
        session()->flash('exito','Se actualizo el usuario: '.$cliente->nombre);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cliente $cliente)
    {
        $cliente = cliente::findOrFail($cliente);
        $cliente->delete();
        session()->flash('exito','Se elimino el usuario: '.$cliente->nombre);
        return redirect()->back();
    }
}
