@extends('layouts.plantilla')
@section('contenido')

    {{-- Inicia tarjetaCliente --}}
    <div class="container mt-5 col-md-8">

        @foreach ($consulta as $cliente)
            <div class="card text-justify font-monospace">
                <div class="card-header fs-5 text-primary"> 
                    {{$cliente->nombre}} {{$cliente->apellido}} 
                </div>

                <div class="card-body">
                    <h5 class="fw-bold"> {{$cliente->correo}} </h5>
                    <h5 class="fw-medium"> {{$cliente->telefono}} </h5>
                    <p class="card-text fw-lighter"> </p>
                </div>

                <div class="card-footer text-muted">
                    <a href="{{ route('cliente.edit', $cliente->id) }}" type="submit" class="btn btn-warning btn-sm"> {{__('Actualizar')}}</a>
                    <form action="{{ route('cliente.destroy', $cliente->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">{{ __('Eliminar') }}</button>
                    </form>                
                </div>
            </div>
        @endforeach

    </div>
    {{-- divcontainer --}}

@endsection