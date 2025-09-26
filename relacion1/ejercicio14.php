<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Relación 1 - Ejercicio 14</title>
        <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
    </head>
    <body>
        <h2>Relación 1 - Ejercicio 14</h2>

        <?php
        $numero = 7;
        $sumatorio = 0;

        if ($numero > 0) {
            for ($i = $numero; $i > 0; $i--){
                $sumatorio += $i;
            }

            echo "El sumatorio de $numero es: $sumatorio";
        } else {
            echo "El sumatorio de $sumatorio no está definido, debe de ser un número natural.";
        }
        
        
        ?>
    </body>
</html>