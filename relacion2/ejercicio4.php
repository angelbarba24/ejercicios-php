<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Relación 2 - Ejercicio 4</title>
        <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="bg-light">
        <div class="container py-5">
            <h1 class="mb-4 text-primary">Relación 2 - Ejercicio 4</h1>

            <?php
                const SEMANA = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"];

                echo "<p class='lead'>El primer día de la semana es: <strong>" . SEMANA[0] . "</strong></p>";
                echo "<p>Una semana tiene <strong>" . count(SEMANA) . "</strong> días.</p>";

                echo "<h4>Lista numerada:</h4>";
                echo "<ol class='list-group list-group-numbered'>";
                for ($i = 0; $i < count(SEMANA); $i++) {
                    echo "<li class='list-group-item'>" . SEMANA[$i] . "</li>";
                }
                echo "</ol>";
            ?>
        </div>
    </body>
</html>