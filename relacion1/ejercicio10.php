<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Relación 1 - Ejercicio 10</title>
        <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
    </head>
    <body>
        <h2>Relación 1 - Ejercicio 10</h2>

        <?php
        $a = 1;
        $b = 9;
        $c = 1;

        $radical = $b ** 2 - 4 * $a * $c;

        if ($radical < 0) {
            echo "Las raices no son reales.";
        } else {
            $x1 = (-$b + sqrt($radical)) / (2 * $a);
            $x2 = (-$b - sqrt($radical)) / (2 * $a);
            echo "Los resultados son: $x1 y $x2.";
        }
        ?>
    </body>
</html>