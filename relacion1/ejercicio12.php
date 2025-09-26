<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Relación 1 - Ejercicio 12</title>
        <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
    </head>
    <body>
        <h2>Relación 1 - Ejercicio 12</h2>

        <?php
        $nota = -1;
        
        switch ($nota) {
            case $nota < 0:
                echo "La nota introducida no es válida.";
                break;
            case $nota >= 0 && $nota < 5:
                echo "Suspenso";
                break;
            case $nota < 6:
                echo "Suficiente";
                break;
            case $nota < 7:
                echo "Bien";
                break;
            case $nota < 9:
                echo "Notable";
                break;
            case $nota <= 10:
                echo "Sobresaliente";
                break;
            default:
                echo "La nota introducida no es válida.";
        }
        ?>
    </body>
</html>