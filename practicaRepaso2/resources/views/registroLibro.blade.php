@extends('layouts.plantilla')

@section('titulo', 'Registro de Libros')

@section('contentenido')

<div class="container mt-5 col-md-6">

    <div class="card shadow">
        <h5 class="card-header text-center">{{__('Registro de Libros')}}</h5>
        <div class="card-body">
            <form action="/enviarLibro" method="POST"></form>
                @csrf
                <div class="mb3">
                    <label for="isbn" class="form-label">{{__('ISBN')}}</label>
                    <input type="text" class="form-control" id="isbn" name="txtisbn" value="{{old('isbn')}}">
                    <small class="text-danger fst-italic">{{ $error->first('txtnombre') }}</small>
                </div>
                <div class="mb3">
                    <label for="titulo" class="form-label">{{__('Título')}}</label>
                    <input type="text" class="form-control" id="titulo" name="txttitulo" value="{{old('titulo')}}">
                    <small class="text-danger fst-italic">{{ $error->first('txttitulo') }}</small>
                </div>
                <div class="mb3">
                    <label for="autor" class="form-label">{{__('Autor')}}</label>
                    <input type="text" class="form-control" id="autor" name="txtautor" value="{{old('autor')}}">
                    <small class="text-danger fst-italic">{{ $error->first('txtautor') }}</small>
                </div>
                <div class="mb3">
                    <label for="paginas" class="form-label">{{__('Número de páginas')}}</label>
                    <input type="number" class="form-control" id="paginas" name="txtpaginas" value="{{old('paginas')}}">
                    <small class="text-danger fst-italic">{{ $error->first('txtpaginas') }}</small>
                </div>
                <div class="mb3">
                    <label for="editor" class="form-label">{{__('Año de publicación')}}</label>
                    <input type="number" class="form-control" id="editor" name="txtaño" value="{{old('fechaPublicacion')}}">
                    <small class="text-danger fst-italic">{{ $error->first('txtaño') }}</small>
                </div>
                <div class="mb3">
                    <label for="editor" class="form-label">{{__('Editorial')}}</label>
                    <input type="text" class="form-control" id="editor" name="txteditorial" value="{{old('editor')}}">
                    <small class="text-danger fst-italic">{{ $error->first('txteditorial') }}</small>
                </div>
                <div class="mb3">
                    <label for="idioma" class="form-label">{{__('Email de Idioma')}}</label>
                    <input type="text" class="form-control" id="idioma" name="txtemailEditorial" value="{{old('idioma')}}">
                    <small class="text-danger fst-italic">{{ $error->first('txtemailEditorial') }}</small>
                </div>
                <div class="d-grid mt-4">
                    <button type="submit" class="btn btn-primary">{{__('Guardar libro')}}</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection