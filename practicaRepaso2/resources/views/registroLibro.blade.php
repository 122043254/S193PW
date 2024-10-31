@extends('layouts.plantilla')

@section('titulo', 'Registro de Libros')

@section('contentenido')

<div class="container mt-5 col-md-6">

    @if (session('exito'))
    {!!
        "<script>
            Swal.fire({
                title: '¡Todo correcto!',
                text: 'Libro "" guardado',
                icon: 'success'
            });
        </script>""
        !!}
    @endif

    <div class="card">
        <h5 class="card-title">{{__('Registro de Libros')}}</h5>
        <div class="card-body">
            <form class="mb3 action" action="" method=""></form>
            @csrf
            <div class="mb3">
                <label for="titulo" class="form-label">{{__('Título')}}</label>
                <input type="text" class="form-input" id="titulo" name="titulo" value="{{old('titulo')}}">
            </div>
            <div class="mb3">
                <label for="autor" class="form-label">{{__('Autor')}}</label>
                <input type="text" class="form-input" id="autor" name="autor" value="{{old('autor')}}">
            </div>
            <div class="mb3">
                <label for="editor" class="form-label">{{__('Editor')}}</label>
                <input type="text" class="form-input" id="editor" name="editor" value="{{old('editor')}}">
            </div>
            <div class="mb3">
                <label for="editor" class="form-label">{{__('Fecha de publicación')}}</label>
                <input type="date" class="form-input" id="editor" name="editor" value="{{old('fechaPublicacion')}}">
            </div>
            <div class="mb3">
                <label for="isbn" class="form-label">{{__('ISBN')}}</label>
                <input type="text" class="form-input" id="isbn" name="isbn" value="{{old('isbn')}}">
            </div>
            <div class="mb3">
                <label for="paginas" class="form-label">{{__('Número de páginas')}}</label>
                <input type="number" class="form-input" id="paginas" name="paginas" value="{{old('paginas')}}">
            </div>
            <div class="mb3">
                <label for="idioma" class="form-label">{{__('Idioma')}}</label>
                <input type="text" class="form-input" id="idioma" name="idioma" value="{{old('idioma')}}">
            </div>
            <div class="mb3">
                <label for="noEdicion" class="form-label">{{__('Edición')}}</label>
                <input type="number" class="form-input" id="noEdicion" name="noEdicion" value="{{old('noEdicion')}}">
            </div>
        </div>

        <div class="card-footer">
            <button class="btn btn-primary">{{__('Guardar')}}</button>
        </div>

        </form>

    </div>

</div>