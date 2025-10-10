<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Relación 2 - Ejercicio 12</title>
        <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <div id="wrapper" class="d-flex justify-content-center align-items-center mt-5">
            <form class="shadow p-3 rounded" action="calculo.php" method="get" onsubmit="return validarFormularioNotas()">
                <h2>Relación 2 - Ejercicio 12</h2>
                                <div>
                    <label class="form-label" for="nombre">Introduce tu nombre: <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="nombre" id="nombre">
                    <div id="nombreHelp" class="form-text">El nombre es obligatorio</div>
                </div>
                <div>
                    <label class="form-label" for="email">Introduce tu correo: <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="email" id="email">
                </div>
                <div>
                    <label class="form-label" for="Inicial">Introduce la nota inicial: <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="Inicial" id="Inicial">
                </div>
                <div>
                    <label class="form-label" for="Primera">Introduce la primera nota: <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="Primera" id="Primera">
                </div>
                <div>
                    <label class="form-label" for="Segunda">Introduce la segunda nota: <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="Segunda" id="Segunda">
                </div>
                <div>
                    <label class="form-label" for="Tercera">Introduce la tercera nota: <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="Tercera" id="Tercera">
                </div>
                <input class="form-control my-3" type="submit" value="Enviar">
            </form>
        </div>
        <script src="./validacion.js"></script>
    </body>
</html>