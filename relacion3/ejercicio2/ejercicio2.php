<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Relación 3 - Ejercicio 2</title>
        <link rel="shortcut icon" href="../playamar.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <div id="wrapper" class="d-flex flex-column justify-content-center align-items-center">
            <form class="shadow p-3 rounded w-50" id="formulario" action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
                <h2>Relación 3 - Ejercicio 2 - Factorial recursivo</h2>
                <div>
                    <label class="form-label" for="numero">Introduce un número: <span class="text-danger">*</span></label>
                    <input class="form-control" type="number" name="numero" id="numero" min="1">
                </div>
                <input class="form-control my-3" type="submit" value="Enviar">
            </form>

            <div id="resultado" class="w-50 mt-3">
                <?php
                $numero = $_GET['numero'];
                
                function factorial($numero) {
                    if ($numero > 0) {
                        if ($numero == 1) {
                            return 1;
                        } else {
                            return $numero * factorial($numero - 1);
                        }
                    } else {
                        echo "El número debe de ser un número natural mayor que 0.";
                    }
                }

                echo "El factorial de ", $numero, " es: ", factorial($numero);
                ?>
            </div>
        </div>
    </body>
</html>