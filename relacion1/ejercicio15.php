<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Relación 1 - Ejercicio 15</title>
        <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
    </head>
    <body>
        <h2>Relación 1 - Ejercicio 15</h2>

        <?php
        $numero = 8;
        $primo = True;

        if ($numero > 1) {
            for ($i = 2; $i < $numero && $primo == True; $i++) {
                if ($numero % $i == 0) {
                    $primo = False;
                }
            }

            if ($primo) {
                echo "El número $numero es primo.";
            } else {
                echo "El número $numero no es primo, divisor: ", $i-1;
            }

        } else {
            echo "El número debe de ser un número natural mayor que 1.";
        }
        ?>
    </body>
</html>