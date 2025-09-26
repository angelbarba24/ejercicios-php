<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Relación 1 - Ejercicio 4</title>
        <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
    </head>
    <body>
        <?php
            const SEMANA = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"];

            echo "El primer día de la semana es: ", SEMANA[0], "<br>";
            echo "Una semana tiene ", count(SEMANA), " días.<br><br>";

            // Para quitar los errores:
            // error_reporting(E_ALL & ~E_WARNING);

            // Lista recorrida con for
            for ($i = 0; $i < count(SEMANA); $i++) {
                echo SEMANA[$i], "<br>";
            }
            
            // Lista numerada recorrida con for usando variable de contador
            for ($i = 0; $i < count(SEMANA); $i++) {
                echo $i+1,". ", SEMANA[$i], "<br>";
            }

            // Lista numerada recorrida con for usando lista ol
            echo "<ol>";
            for ($i = 0; $i < count(SEMANA); $i++) {
                echo "<li>", SEMANA[$i], "</li>";
            }
            echo "</ol>";
        ?>
    </body>
</html>