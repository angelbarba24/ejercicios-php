<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Relación 1 - Ejercicio 11</title>
        <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
    </head>
    <body>
        <h2>Relación 1 - Ejercicio 11</h2>

        <?php
            $a = 1;
            $b = 9;
            $c = 1;

            if ($a != 0) {
                // Caso cuadrático
                $radical = $b ** 2 - 4 * $a * $c;
                if ($radical < 0) {
                    echo "Las raíces no son reales.";
                } elseif ($radical == 0) {
                    $x = -$b / (2 * $a);
                    echo "La ecuación tiene una raíz doble: $x.";
                } else {
                    $x1 = (-$b + sqrt($radical)) / (2 * $a);
                    $x2 = (-$b - sqrt($radical)) / (2 * $a);
                    echo "Las raíces son: $x1 y $x2.";
                }
            } else {
                // Caso no cuadrático
                if ($b != 0) {
                    // Ecuación lineal
                    $x = -$c / $b;
                    echo "Ecuación lineal. Solución única: $x.";
                } else {
                    if ($c != 0) {
                        // Contradicción
                        echo "No hay solución, la ecuación es inconsistente.";
                    } else {
                        // Identidad
                        echo "La ecuación es una identidad: infinitas soluciones.";
                    }
                }
            }
        ?>
    </body>
</html>