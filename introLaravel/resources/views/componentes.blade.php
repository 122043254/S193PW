@extends('layouts.plantilla')

@section('titulo','Componentes Blade')

@section('contenido')

    <x-Card encabezado="Componente" titulo="Dinamico" textoBoton="Guardar">
        Soy el contenido del primero
    </x-Card>
    <x-Card encabezado="Componente2" titulo="Dinamico2" textoBoton="No Guardar">
        Soy el contenido del segundo
    </x-Card>

    <x-Alert tipo="danger"> </x-Alert>
    <x-Alert tipo="warning"> </x-Alert>

@endsection