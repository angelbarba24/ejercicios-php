<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Relación 1 - Ejercicio 16</title>
        <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
    </head>
    <style>
        .divisor {
            color: red;
        }
    </style>
    <body>
        <h2>Relación 1 - Ejercicio 16</h2>

        <?php
        $numero = 48;
        
        if ($numero > 0) {
            for ($i = 1; $i <= $numero; $i++){
                if ($numero % $i == 0){
                    echo "<span class='divisor'>$i </span>";
                } else {
                    echo "$i ";
                }
            }
        } else {
            echo "El número debe de ser mayor que 0.";
        }
        ?>
    </body>
</html>