<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Relación 1 - Ejercicio 19</title>
        <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
    </head>
    <body>
        <h2>Relación 1 - Ejercicio 19</h2>

        <?php
            $numero = 4;

            if (!is_int($numero) || $numero < 0) {
                echo "Error: el valor debe ser un número natural (entero >= 0).";
            } elseif ($numero === 0) {
                echo "El binario de 0 es 0.";
            } else {
                $restos = [];
                $n = $numero;

                while ($n > 0) {
                    $resto = $n % 2;
                    array_push($restos, $resto);
                    $n = intdiv($n, 2);
                }

                // Invertimos el array y lo convertimos en cadena
                $binario = implode(array_reverse($restos));

                echo "Decimal $numero = Binario $binario";
            }
        ?>
    </body>
</html>