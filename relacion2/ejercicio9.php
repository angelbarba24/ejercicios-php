<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Relación 2 - Ejercicio 7</title>
        <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body>
        <div class="d-flex justify-content-center align-items-center vh-100 bg-white">
            <form class="shadow p-3 rounded" action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
                <h2>Relación 2 - Ejercicio 7</h2>
                <div>
                    <label class="form-label" for="numero1">Introduce número 1:</label>
                    <input class="form-control" type="number" name="numero1" id="numero1">
                </div>
                <div>
                    <label class="form-label" for="numero2">Introduce número 2:</label>
                    <input class="form-control" type="number" name="numero2" id="numero2">
                </div>
                <input class="form-control my-3" type="submit" value="Enviar">
            </form>
        </div>

        <?php
            echo "hola";
        ?>
    </body>
</html>