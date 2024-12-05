@extends('layouts.plantilla')
@section('titulo','formulario editar')
@section('contenido')

{{-- Inicia Tarjeta con formulario --}}
    {{-- @dump($id) --}}
    <div class="container mt-5 col-md-6">

        <div class="card font-monospace">

            <div class="card-header fs-5 text-center text-primary">
                {{__('Registro de Clientes')}}
            </div>

            <div class="card-body text-justify">

                <form action="{{ route('cliente.update', $cliente->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="nombre" class="form-label">{{__('Nombre')}} </label>
                        <input type="text" class="form-control" name="txtnombre"value="{{old('txtnombre', $cliente->nombre)}}">
                        <small class="txt-danger fst-italic"> {{ $errors->first('txtnombre') }} </small>
                    </div>
                    <div class="mb-3">
                        <label for="apellidos" class="form-label">{{__('Apellidos')}}</label>
                        <input type="text" class="form-control" name="txtapellidos" value="{{old('txtapellidos', $cliente->apellido)}}">
                        <small class="txt-danger fst-italic">{{ $errors->first('txtapellidos') }}</small>
                    </div>
                    <div class="mb-3">
                        <label for="correo" class="form-label">{{__('Correo')}}</label>
                        <input type="text" class="form-control" name="txtcorreo" value="{{old('txtcorreo', $cliente->correo)}}">
                        <small class="txt-danger fst-italic">{{ $errors->first('txtcorreo') }}</small>
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">{{__('Telefono')}}</label>
                        <input type="text" class="form-control" name="txttelefono" value="{{old('txttelefono', $cliente->telefono)}}">
                        <small class="txt-danger fst-italic">{{ $errors->first('txttelefono') }}</small>
                    </div>
            </div>

            <div class="card-footer text-muted">

            <div class="d-grid gap-2 mt-2 mb-1">
                <button type="submit" class="btn btn-success btn-sm"> {{__('Guardar Cliente')}} </button>
            </div>

            </form>
            </div>
        </div>
    </div>

@endsection
