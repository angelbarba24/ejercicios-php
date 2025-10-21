<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Relación 3 - Ejercicio 1</title>
        <link rel="shortcut icon" href="../playamar.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <div id="wrapper" class="d-flex flex-column justify-content-center align-items-center">
            <form class="shadow p-3 rounded w-50" id="formulario" action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
                <h2>Relación 3 - Ejercicio 3 - MCD Recursivo</h2>
                <div>
                    <label class="form-label" for="numero1">Introduce un número: <span class="text-danger">*</span></label>
                    <input class="form-control" type="number" name="numero1" id="numero1" min="1">
                    <label class="form-label" for="numero2">Introduce otro número: <span class="text-danger">*</span></label>
                    <input class="form-control" type="number" name="numero2" id="numero2" min="1">
                </div>
                <input class="form-control my-3" type="submit" value="Enviar">
            </form>

            <div id="resultado" class="w-50 mt-3">
                <?php
                $numero1 = $_GET['numero1'];
                $numero2 = $_GET['numero2'];
                
                function mcd($numero1, $numero2) {
                    if ($numero1 > 0 && $numero2) {
                        if ($numero1 == $numero2) {
                            return $numero1;
                        } else {
                            if ($numero1 > $numero2){
                                return mcd($numero2, $numero1 - $numero2);
                            } else {
                                return mcd($numero1, $numero2 - $numero1);
                            }
                        }
                    } else {
                        echo "El número debe de ser un número natural mayor que 0.";
                    }
                }
                echo "<h3>El MCD de ", $numero1, " y ", $numero2, " es: ", mcd($numero1, $numero2), "</h3>";
                ?>
            </div>
        </div>
    </body>
</html>