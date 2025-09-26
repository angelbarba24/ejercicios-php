<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Relación 1 - Ejercicio 13</title>
        <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
    </head>
    <body>
        <h2>Relación 1 - Ejercicio 13</h2>

        <?php
        $numero = 7;
        $factorial = 1;

        if ($numero > 0) {
            for ($i = $numero; $i > 0; $i--){
                $factorial *= $i;
            }

            echo "El factorial de $numero es: $factorial";
        } else {
            echo "El factorial de $numero no está definido, debe de ser un número natural.";
        }
        
        
        ?>
    </body>
</html>