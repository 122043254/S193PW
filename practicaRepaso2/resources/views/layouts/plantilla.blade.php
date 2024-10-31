<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    @vite(['resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title> @yield('titulo') </title>
</head>
<body>
    
    {{-- INICIO DE NAVBAR --}}
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('rutaPrincipal') }}">BIBLIOTECA WEB</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('rutaRegistroLibro')}}"> {{__('Registro de Libros')}} </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- FIN DE NAVBAR --}}

    @yield('contentenido')

    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex justify-content-start align-items-center">
            <a href="/" class="me-2 text-body-secondary text-decoration-none lh-1">
                Biblioteca web
            </a>
            <span class="text-body-secondary">© 2024 Copyright</span>
        </div>

        <ul class="nav col-md-4 justify-content-end align-items-center list-unstyled d-flex">
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

</body>
</html>