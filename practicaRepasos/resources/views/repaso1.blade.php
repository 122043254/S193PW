<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/js/app.js'])

    <title>Convertidor de Vistas</title>
</head>
<body>
    
    <div class="container mt-5 col-md-6">
        <div class="card">
            <div class="card-body">
                <form action="/convertir" method="POST">
                    @csrf
                    <fieldset>
                        <legend>Convertidor de vistas</legend>
                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">Seleccione la primer opción</label>
                            <select class="form-select" name="unidadOrigen">
                                <option selected>Seleccione una opción</option>
                                <option value="MB">MB</option>
                                <option value="GB">GB</option>
                                <option value="TB">TB</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Ingrese el valor de la primera cantidad</label>
                            <input type="text" class="form-control" name="txtentrada">
                        </div>
                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">Seleccione la opción a hacer el cambio</label>
                            <select class="form-select" id="unidadDestino" name="unidadDestino">
                                <option selected>Seleccione una opción</option>
                                <option value="MB">MB</option>
                                <option value="GB">GB</option>
                                <option value="TB">TB</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Este es el cambio a el seleccionado</label>
                            <input type="text" class="form-control" name="txtresultado" value="{{ session('resultado') }}" disabled>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Hacer la converción</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <br>

</body>
</html>