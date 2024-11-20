<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\validadorCliente;
use Carbon\Carbon;

class clienteControlador extends Controller
{

    public function index()
    {
        $consultaclientes = DB::table('clientes')->get();
        return view('clientes', compact('consultaclientes'));
    }

    public function create(){
        return view('form');
    }

    public function store(validadorCliente $request)
    {
        DB::table('clientes')->insert([
            "nombre" => $request->input('txtnombre'),
            "apellidos" => $request->input('txtapellidos'),
            "correo" => $request->input('txtcorreo'),
            "telefono" => $request->input('txttelefono'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        $usuario = $request->input('txtnombre');
        session()->flash('exito', 'Se guardo el usuario: ' . $usuario);
        return to_route('rutaForm');
    }

    public function edit($id)
    {
        $cliente = DB::table('clientes')->where('id', $id)->first();
        if (!$cliente) {
            return redirect()->back()->withErrors(['error' => 'Cliente no encontrado']);
        }
        return view('fomularioActualizar', compact('cliente'));
    }
    
    public function update(validadorCliente $request, $id)
    {
        $updated = DB::table('clientes')
            ->where('id', $id)
            ->update([
                "nombre" => $request->input('txtnombre'),
                "apellidos" => $request->input('txtapellidos'),
                "correo" => $request->input('txtcorreo'),
                "telefono" => $request->input('txttelefono'),
                "updated_at" => Carbon::now(),
        ]);

        if ($updated) {
            session()->flash('exito', 'Se actualizo el cliente con ID: ' . $id);
        } else {
            session()->flash('error', 'No se pudo actualizar el cliente');
        }

        return to_route('rutaClientes');
    }

    public function destroy($id)
    {
        $deleted = DB::table('clientes')->where('id', $id)->delete();

        if ($deleted) {
            session()->flash('exito', 'Se elimino el cliente con ID: ' . $id);
        } else {
            session()->flash('error', 'No se pudo eliminar el cliente');
        }
        return to_route('rutaClientes');
    }
    
}
