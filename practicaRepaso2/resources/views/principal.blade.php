@extends('layouts.plantilla')

@section('titulo', 'BIBLIOTECA WEB')

@section('contentenido')

<div class="container mt-5 col-md-6">

    <div class="card-group">
        <div class="card">
            <img src="https://imagenes.elpais.com/resizer/v2/OEGUNLG73EEC4F4LRPG3SH3RQA.jpg?auth=3f88d99767b50838614c21aa6ed6dfeed2ca1ce5b73d60321bad5391c32931e9&width=414&height=311&smart=true" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{__('Cualquiera puede ser gallego, por eso hay nuchos Rivas')}}</h5>
                <p class="card-text">{{__('Hay un 'tono Rivas' que tiene la poesía como célula madre, pero que adopta con toda naturalidad las voces que necesita cada historia.')}}</p>
            </div>
            <div class="card-footer">
                <small class="text-body-secondary">{{__('Publicado el 29 de Octubre de 2024')}}</small>
            </div>
        </div>
        <div class="card">
            <img src="https://imagenes.elpais.com/resizer/v2/QV5FV2NNT5CKRDWTSWLYE7FO4E.jpg?auth=97ef5fdabf30aa206ca6e65606e75f487dc408d0cb922ebe182f06fb58b8e72a&width=414&height=311&focal=1805%2C1076" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{__('Literatura con orgullo de clase trabajadora')}}</h5>
                <p class="card-text">{{__('Títulos como 'Verano sin vacaciones','Servicio de lavandería' o 'Supersaurio' exploran las luchas laborales, la vida cotidiana y la dignidad de los estratos más bajos de la pirámide social.')}}</p>
            </div>
            <div class="card-footer">
                <small class="text-body-secondary">{{__('Publicado el 29 de Octubre de 2024')}}</small>
            </div>
        </div>
        <div class="card">
            <img src="https://imagenes.elpais.com/resizer/v2/BPBK7GWN6JKZ5DIK4TZVDZXQLI.jpg?auth=c6c53f5fbf9b1ee9da7537444521811216735979bd79d0ae98a408b92f4c2bd7&width=414&height=311&focal=389%2C195" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{__('El juego')}}</h5>
                <p class="card-text">{{__('Cuánta gente en su vida personal está dictando El juego y a cuánta de esa gente se lo están dictando es, al abrir los periódicos, una de las más pertinentes preguntas de nuestro tiempo.')}}</p>
            </div>
            <div class="card-footer">
                <small class="text-body-secondary">{{__('Publicado el 29 de Octubre de 2024')}}</small>
            </div>
        </div>
    </div>

    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                Biblioteca web
            </a>
            <span class="mb-3 mb-md-0 text-body-secondary">© 2024 Company, Inc</span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3">
                <span class="text-body-secondary">@2024 Biblioteca web</span>
            </li>
            <li class="ms-3">
                <span class="text-body-secondary">
                    <script>
                        document.write(new Date().toLocaleDateString('es-ES', {day:'numeric', month:'long', year:'numeric'}));
                    </script>
                </span>
            </li>
        </ul>
    </footer>

</div>
@endsection