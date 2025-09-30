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
            $numero = 192;
            $base = 16;

            if (!is_int($numero) || $numero < 0) {
                echo "Error: el valor debe ser un número natural (entero >= 0).";
            } elseif ($numero === 0) {
                echo "El número 0 en base $base es 0.";
            } else {
                $restos = [];
                $n = $numero;

                while ($n > 0) {
                    $digito = $n % $base;
                    if ($base == 16 && $digito > 9){
                        // Con switch (si hay muchas letras es ineficiente, mucho código)
                        /*switch ($digito) {
                            case 10:
                                $digito = "A";
                                break;
                            case 11:
                                $digito = "B";
                                break;
                            case 12:
                                $digito = "C";
                                break;
                            case 13:
                                $digito = "D";
                                break;
                            case 14:
                                $digito = "E";
                                break;
                            case 15:
                                $digito = "F";
                                break;
                        }*/
                        
                        // Con código ASCII (versión más óptima)
                        $digito = chr(55 + $digito);

                        array_push($restos, $digito);
                    } else {
                        array_push($restos, $digito);
                    }
                    $n = intdiv($n, $base);
                }

                echo "- Decimal: $numero.<br>- Base $base: " . implode(array_reverse($restos));
            }
            ?>
    </body>
</html>