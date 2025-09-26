<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Relación 1 - Ejercicio 9</title>
        <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
    </head>
    <body>
        <h2>Relación 1 - Ejercicio 9</h2>

        <?php
        $lado1 = 5;
        $lado2 = 5;
        $lado3 = 6;

        if ($lado1 == $lado2 and $lado1 == $lado3){
            echo "El triangulo es equilátero.";
        } elseif ($lado1 == $lado2 or $lado1 == $lado3 or $lado2 == $lado3){
            echo  "El triangulo es isósceles.";
        } else {
            echo "El triangulo es escaleno.";
        }
        ?>
    </body>
</html>