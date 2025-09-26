<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Relación 1 - Ejercicio 2</title>
        <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
    </head>
    <body>
        <?php
            $booleano = True;
            echo var_dump($booleano);
            
            $numero = 5;
            echo "<br>", var_dump($numero);

            $flotante = 8.6;
            echo "<br>", var_dump($flotante);

            $cadena = "Hola";
            echo "<br>", var_dump($cadena);
            
            printf("<br><br>- Booleano: %s", $booleano);
            printf("<br>- Número: %s", $numero);
            printf("<br>- Flontante: %1\$.2f", $flotante); // Decimal con 2 decimales
            printf("<br>- Cadena: %s", $cadena);
        ?>
    </body>
</html>