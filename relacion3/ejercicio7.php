<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Relación 3 - Ejercicio 7</title>
        <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body class="bg-light">
        <div class="container py-5">
            <h1 class="mb-4 text-center">Funciones de fecha y hora</h1>

            <?php
                function nombreDiaEspanol($fecha) {
                    $dias = ["domingo", "lunes", "martes", "miércoles", "jueves", "viernes", "sábado"];
                    $numeroDia = date("w", strtotime($fecha));
                    return $dias[$numeroDia];
                }

                function nombreMesEspanol($fecha) {
                    $meses = [
                        "enero", "febrero", "marzo", "abril", "mayo", "junio",
                        "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"
                    ];
                    $numeroMes = date("n", strtotime($fecha)) - 1;
                    return $meses[$numeroMes];
                }

                $fechaActual = date("Y-m-d");
                echo "<div class='text-center'>";
                echo "<p>Fecha actual: <strong>$fechaActual</strong></p>";
                echo "<p>Día de la semana: <strong>" . nombreDiaEspanol($fechaActual) . "</strong></p>";
                echo "<p>Mes: <strong>" . nombreMesEspanol($fechaActual) . "</strong></p>";
                echo "</div>";
            ?>
        </div>
    </body>
</html>