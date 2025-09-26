<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Relación 1 - Ejercicio 18</title>
        <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
    </head>
    <body>
        <h2>Relación 1 - Ejercicio 18</h2>

        <?php
        $n1 = 47;
        $n2 = 8;

        if ($n1 > 0 && $n2 > 0){
            while ($n1 != $n2){
                if ($n1 > $n2) {
                    $n1 -= $n2;
                } else {
                    $n2 -= $n1;
                }
            }
            echo "El máximo común divisor es: $n1";
        } else {
            echo "Ambos números deben de ser mayores que 0.";
        }
        ?>
    </body>
</html>