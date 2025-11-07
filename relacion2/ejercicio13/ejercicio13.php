<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Relación 2 - Ejercicio 13</title>
        <link rel="shortcut icon" href="../playamar.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <div id="wrapper" class="d-flex justify-content-center align-items-center">
            <form class="shadow p-3 rounded w-50" id="formulario" action=<?php echo htmlspecialchars("calculo.php")?> method="get">
                <h2>Relación 2 - Ejercicio 13</h2>
                <div>
                    <label class="form-label" for="lado1">Introduce el lado 1: <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="lado1" id="lado1">
                    <div id="lado1Help" class="form-text text-danger">El valor debe de ser entero positivo.</div>
                </div>
                <div>
                    <label class="form-label" for="lado2">Introduce el lado 2: <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="lado2" id="lado2">
                    <div id="lado2Help" class="form-text text-danger">El valor debe de ser entero positivo.</div>
                </div>
                <div>
                    <label class="form-label" for="lado3">Introduce el lado 3: <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="lado3" id="lado3">
                    <div id="lado3Help" class="form-text text-danger">El valor debe de ser entero positivo.</div>
                </div>
                <input class="form-control my-3" type="submit" value="Enviar">
            </form>
        </div>
        <script src="./validacion.js"></script>
    </body>
</html>