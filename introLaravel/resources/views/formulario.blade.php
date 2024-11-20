@extends('layouts.plantilla')

@section('titulo','Formulario Clientes')

@section('contenido')

    {{-- Inicia Tarjeta con formulario --}}

    <div class="container mt-5 col-md-6">
        {{-- @if(session('exito'))
        <x-Alert tipo="success"> {{session('exito')}}</x-Alert>
        @endif --}}
        {{--@session('exito')
        <x-Alert style="background-color: greenyellow;" tipo="warning" > {{ $value }}</x-Alert>
        @endsession--}}
        
        @if(session('exito'))
            <script>
                Swal.fire({
                    title: "¡Exito!",
                    text: "{{{ session('exito') }}}",
                    icon: "success",
                    confirmButtonText: "Aceptar",
                });
            </script>
        @endif

        <div class="card font-monospace">

            <div class="card-header fs-5 text-center text-primary">
                {{ __('Registro de Clientes') }}
            </div>

            <div class="card-body text-justify">

                <form class="mb-3" action="/procesarCliente" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nombre" class="form-label">{{__('Nombre')}}: </label>
                        <input type="text" class="form-control" name="txtnombre" id="nombre" value="{{ old('txtnombre') }}">
                        <small class="text-danger fst-italic">{{ $errors->first('txtnombre') }}</small>                    
                    </div>
                    <div class="mb-3">
                        <label for="apellidos" class="form-label">{{__('Apellidos')}}: </label>
                        <input type="text" class="form-control" name="txtapellidos" id="apellidos" value="{{ old('txtapellidos') }}">
                        <small class="text-danger fst-italic">{{ $errors->first('txtapellidos') }}</small>
                    </div>
                    <div class="mb-3">
                        <label for="correo" class="form-label">{{__('Correo:')}} </label>
                        <input type="text" class="form-control" name="txtcorreo" value="{{ old('txtcorreo') }}">
                        <small class="text-danger fst-italic">{{ $errors->first('txtcorreo') }}</small>
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">{{__('Telefono')}}: </label>
                        <input type="text" class="form-control" name="txttelefono" value="{{ old('txttelefono') }}">
                        <small class="text-danger fst-italic">{{ $errors->first('txttelefono') }}</small>
                    </div>
            </div>

            <div class="card-footer text-muted">

            <div class="d-grid gap-2 mt-2 mb-1">
                <button type="submit" class="btn btn-success btn-sm"> {{__('Guardar Cliente')}} </button>
            </div>

            </form>
            </div>
        </div>
    </div> {{-- divcontainer --}}
    {{-- Finaliza Tarjeta con formulario --}}

@endsection