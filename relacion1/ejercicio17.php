<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Relación 1 - Ejercicio 17</title>
        <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
    </head>
    <body>
        <h2>Relación 1 - Ejercicio 17</h2>

        <?php
        $dividendo = 48;
        $divisor = 8;
        $cociente = 0;
        $resto = $dividendo;
        
        if ($dividendo > 0 && $divisor > 0) {
            if ($dividendo > $divisor) {
                while ($resto >= $divisor){
                    $resto -= $divisor;
                    $cociente++;
                }
                echo "Resultado: dividendo = $dividendo, divisor = $divisor, cociente = $cociente, resto = $resto";
            } else {
                echo "El dividendo $dividendo es menor que el divisor $divisor.";
            }
        } else {
            echo "El dividendo y el divisor deben de ser positivos";
        }
        
        ?>
    </body>
</html>