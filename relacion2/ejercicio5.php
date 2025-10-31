<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Relación 2 - Ejercicio 5</title>
        <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="bg-light">
        <div class="container py-5">
            <h1 class="mb-4 text-primary">Relación 1 - Ejercicio 5</h1>

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

            echo "<h4>Tabla de temperaturas semanal:</h4>";
            echo "<table class='table table-bordered table-striped table-hover'>";
            echo "<thead class='table-dark'><tr><th>Día</th><th>Temperatura (°C)</th></tr></thead><tbody>";
            foreach (TEMPERATURAS as $dia => $temp) {
                echo "<tr><td>$dia</td><td>$temp</td></tr>";
            }
            echo "</tbody></table>";
            ?>
        </div>
    </body>
</html>