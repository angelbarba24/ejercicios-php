<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Relación 1 - Ejercicio 20</title>
        <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
    </head>
    <body>
        <h2>Relación 1 - Ejercicio 20</h2>

        <?php 
            $numero = 20;
            $destino = "octal";

            if (!is_int($numero) || $numero < 0) {
                echo "Error: el valor debe ser un número natural (entero >= 0).";
            } elseif ($numero === 0) {
                echo "El $destino de 0 es 0.";
            } else {
                switch ($destino) {
                    case "binario":
                        $base = 2;
                        break;
                    case "octal":
                        $base = 8;
                        break;
                    default:
                        echo "Sistema no válido.";
                        exit;
                }

                $restos = [];
                $n = $numero;

                while ($n > 0) {
                    array_push($restos, $n % $base);
                    $n = intdiv($n, $base);
                }

                echo "Decimal $numero = $destino " . implode(array_reverse($restos));
            }
            ?>
    </body>
</html>