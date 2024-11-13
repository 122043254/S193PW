@extends('layouts.plantilla')

@section('titulo', 'Registro de Libros')

@section('contentenido')

<div class="container mt-5 col-md-6">

    @if (session('exito'))
        <script>
            Swal.fire({
                title: '¡Todo correcto!',
                text: '{!! session('exito') !!}',
                icon: 'success'
            });
        </script>
    @endif

    <div class="card shadow">
        <h5 class="card-header text-center">{{__('Registro de Libros')}}</h5>
        <div class="card-body">
            <form action="/enviarLibro" method="POST">
                @csrf
                <div class="mb3">
                    <label for="isbn" class="form-label">{{__('ISBN')}}</label>
                    <input type="text" class="form-control" id="isbn" name="txtisbn" value="{{old('txtisbn')}}">
                    <small class="text-danger fst-italic">{{ $errors->first('txtisbn') }}</small>
                </div>
                <div class="mb3">
                    <label for="titulo" class="form-label">{{__('Título')}}</label>
                    <input type="text" class="form-control" id="titulo" name="txttitulo" value="{{old('txttitulo')}}">
                    <small class="text-danger fst-italic">{{ $errors->first('txttitulo') }}</small>
                </div>
                <div class="mb3">
                    <label for="autor" class="form-label">{{__('Autor')}}</label>
                    <input type="text" class="form-control" id="autor" name="txtautor" value="{{old('txtautor')}}">
                    <small class="text-danger fst-italic">{{ $errors->first('txtautor') }}</small>
                </div>
                <div class="mb3">
                    <label for="paginas" class="form-label">{{__('Número de páginas')}}</label>
                    <input type="number" class="form-control" id="paginas" name="txtpaginas" value="{{old('txtpaginas')}}">
                    <small class="text-danger fst-italic">{{ $errors->first('txtpaginas') }}</small>
                </div>
                <div class="mb3">
                    <label for="editor" class="form-label">{{__('Año de publicación')}}</label>
                    <input type="number" class="form-control" id="editor" name="txtaño" value="{{old('txtaño')}}">
                    <small class="text-danger fst-italic">{{ $errors->first('txtaño') }}</small>
                </div>
                <div class="mb3">
                    <label for="editor" class="form-label">{{__('Editorial')}}</label>
                    <input type="text" class="form-control" id="editor" name="txteditorial" value="{{old('txteditor')}}">
                    <small class="text-danger fst-italic">{{ $errors->first('txteditorial') }}</small>
                </div>
                <div class="mb3">
                    <label for="idioma" class="form-label">{{__('Email de Editorial')}}</label>
                    <input type="text" class="form-control" id="idioma" name="txtemailEditorial" value="{{old('txtidioma')}}">
                    <small class="text-danger fst-italic">{{ $errors->first('txtemailEditorial') }}</small>
                </div>
                <div class="d-grid mt-4">
                    <button type="submit" class="btn btn-primary btn-sm">{{__('Guardar libro')}}</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection