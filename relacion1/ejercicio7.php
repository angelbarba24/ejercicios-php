<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Relación 1 - Ejercicio 7</title>
        <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
    </head>
    <body>
        <h2>Relación 1 - Ejercicio 7</h2>

        <?php
        $nota1 = 9;
        $nota2 = 6;
        $faltas = 5;

        $media = (($nota1 + $nota2) / 2) - $faltas * 0.25; 
       
        echo "Tu nota media es: $media", ($media >= 5) ? ". Has aprobado." : ". Has suspendido.";
        ?>
    </body>
</html>