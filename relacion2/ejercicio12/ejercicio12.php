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
        <div id="wrapper" class="d-flex justify-content-center align-items-center">
            <form class="shadow p-3 rounded w-50" id="formulario" action=<?php echo htmlspecialchars("calculo.php")?> method="get">
                <h2>Relación 2 - Ejercicio 12</h2>
                <div>
                    <label class="form-label" for="nombre">Introduce tu nombre: <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="nombre" id="nombre">
                    <div id="nombreHelp" class="form-text text-danger">El nombre es obligatorio.</div>
                </div>
                <div>
                    <label class="form-label" for="email">Introduce tu correo: <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="email" id="email">
                    <div id="correoHelp" class="form-text text-danger">El correo electrónico no tiene el formato correcto.</div>
                </div>
                <div>
                    <label class="form-label" for="inicial">Introduce la nota inicial: <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="inicial" id="inicial">
                    <div id="inicialHelp" class="form-text text-danger">El valor debe de ser entero positivo entre 0 y 10.</div>
                </div>
                <div>
                    <label class="form-label" for="primera">Introduce la primera nota: <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="primera" id="primera">
                    <div id="primeraHelp" class="form-text text-danger">El valor debe de ser entero positivo entre 0 y 10.</div>
                </div>
                <div>
                    <label class="form-label" for="segunda">Introduce la segunda nota: <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="segunda" id="segunda">
                    <div id="segundaHelp" class="form-text text-danger">El valor debe de ser entero positivo entre 0 y 10.</div>
                </div>
                <div>
                    <label class="form-label" for="tercera">Introduce la tercera nota: <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="tercera" id="tercera">
                    <div id="terceraHelp" class="form-text text-danger">El valor debe de ser entero positivo entre 0 y 10.</div>
                </div>
                <input class="form-control my-3" type="submit" value="Enviar">
            </form>
        </div>
        <script src="./validacion.js"></script>
    </body>
</html>