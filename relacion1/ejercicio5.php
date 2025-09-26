<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Relación 1 - Ejercicio 5</title>
        <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
    </head>
    <body>
        <?php
        const TEMPERATURAS = [
            'Lunes' => 28.5,
            'Martes' => 30.2,
            'Miércoles' => 29.0,
            'Jueves' => 31.3,
            'Viernes' => 27.8,
            'Sábado' => 26.5,
            'Domingo' => 25.0
        ];

        // Mostrar la temperatura del primer día de la semana
        echo "<p>La temperatura del primer día de la semana (Lunes) es: " . TEMPERATURAS['Lunes'] . "°C</p>";

        // Mostrar la temperatura de todos los días secuencialmente
        echo "<p>Temperaturas por día:</p>";
        foreach (TEMPERATURAS as $dia => $temp) {
            echo "$dia: $temp °C<br>";
        }

        // Mostrar en formato de lista numerada
        echo "<p>Temperaturas en lista numerada:</p>";
        echo "<ol>";
        foreach (TEMPERATURAS as $dia => $temp) {
            echo "<li>$dia: $temp °C</li>";
        }
        echo "</ol>";

        // Mostrar en formato de tabla
        echo "<p>Temperaturas en tabla:</p>";
        echo "<table style='border: 1px solid;'>";
        echo "<tr>
                <th style='border: 1px solid;'>DÍA</th>
                <th style='border: 1px solid;'>TEMP</th>
            </tr>";
        foreach (TEMPERATURAS as $dia => $temp) {
            echo "<tr style='border: 1px solid;'>
                    <td style='border: 1px solid;'>$dia</td> <td style='border: 1px solid;'>$temp ºC</td>
                </tr>";
        }
        echo "</table>";
        ?>
    </body>
</html>