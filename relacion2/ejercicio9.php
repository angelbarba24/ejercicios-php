<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Relación 2 - Ejercicio 9</title>
        <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <style>
        #wrapper {
            height: 80vh;
        }
    </style>
    <body>
        <div id="wrapper" class="d-flex justify-content-center align-items-center">
            <form class="shadow p-3 rounded" action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
                <h2>Relación 2 - Ejercicio 9</h2>
                <div>
                    <label class="form-label" for="numero1">Introduce número 1:</label>
                    <input class="form-control" type="number" name="numero1" id="numero1">
                </div>
                <div>
                    <label for="operador">Elige operador:</label>
                    <select class="form-select" name="operador" id="operador">
                        <option value="suma">+</option>
                        <option value="resta">-</option>
                        <option value="producto">*</option>
                        <option value="division">/</option>
                        <option value="resto">%</option>
                    </select>
                </div>
                <div>
                    <label class="form-label" for="numero2">Introduce número 2:</label>
                    <input class="form-control" type="number" name="numero2" id="numero2">
                </div>
                <input class="form-control my-3" type="submit" value="Enviar">
            </form>
        </div>

        <p id="resultado" class="text-center">
            <?php
                if ($_GET) {
                    $numero1 = $_GET['numero1'];
                    $numero2 = $_GET['numero2'];
                    $operador = $_GET['operador'];

                    //Con switch
                    /*switch ($operador){
                        case "suma": 
                            $resultado = $numero1 + $numero2;
                            break;
                        case "resta": 
                            $resultado = $numero1 - $numero2;
                            break;
                        case "producto": 
                            $resultado = $numero1 * $numero2;
                            break;
                        case "division": 
                            $resultado = $numero1 / $numero2;
                            break;
                        case "resto": 
                            $resultado = $numero1 % $numero2;
                            break;
                    }*/

                    // Con match
                    $resultado = match ($operador) {
                        'suma' => $numero1 + $numero2,
                        'resta' => $numero1 - $numero2,
                        'producto' => $numero1 * $numero2,
                        'division' => $numero1 / $numero2,
                        'resto' => $numero1 % $numero2,
                    };
                }
                echo "El resultado es: $resultado";
            ?>
        </p>
    </body>
</html>