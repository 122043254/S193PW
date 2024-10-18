<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/js/app.js'])

    <title>Portada</title>
</head>
<body>
    
    <center>
        <br>
        <h1><strong>Nombre/s: </strong>Lot Abraham</h1>
        <br>
        <h1><strong>Apellidos: </strong>Mondragon Morales</h1>
        <br>
        <h1><strong>Edad: </strong>19 años</h1>
        <br>
        <h1><strong>Año de nacimiento: </strong>2005</h1>
        <br>
        <h1><strong>Genero: </strong>Hombre</h1>
        <br>
        <a class="btn btn-primary" href="{{ route('rutaRepaso1') }}">Repaso 1</a>
    </center>

</body>
</html>