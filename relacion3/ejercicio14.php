<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Relación 3 - Ejercicio 14</title>
        <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body class="bg-light">
        <div class="container py-5">
            <h1 class="mb-4 text-center">Cálculos con funciones anónimas</h1>

            <form method="get" class="row g-3 justify-content-center">
                <div class="col-12 col-md-6">
                    <label for="radio" class="form-label">Introduce el radio en cm (positivo):</label>
                    <input type="number" name="radio" id="radio" class="form-control" step="any" min="0.01" required>
                </div>
                <div class="col-auto align-self-end">
                    <button type="submit" class="btn btn-primary">Calcular</button>
                </div>
            </form>

        <?php
            if (isset($_GET["radio"]) && is_numeric($_GET["radio"]) && $_GET["radio"] > 0) {
                $radio = floatval($_GET["radio"]);

                $circunferencia = function($r) {
                    return 2 * pi() * $r;
                };

                $area = function($r) {
                    return pi() * pow($r, 2);
                };

                $esfera = function($r) {
                    return (4 / 3) * pi() * pow($r, 3);
                };

                echo "<div class='mt-5'>";
                echo "<div class='alert alert-info'><strong>Longitud de la circunferencia:</strong> " . number_format($circunferencia($radio), 2) . " cm</div>";
                echo "<div class='alert alert-success'><strong>Área del círculo:</strong> " . number_format($area($radio), 2) . " cm²</div>";
                echo "<div class='alert alert-warning'><strong>Volumen de la esfera:</strong>" . number_format($esfera($radio), 2) . " cm³</div>";
                echo "</div>";
            }
        ?>
        </div>
    </body>
</html>