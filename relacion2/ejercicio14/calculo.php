<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 14 - Resultado de la nota</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="p-4">

    <?php
        if (!isset($_GET['nota']) || !is_numeric($_GET['nota'])) {
            echo "<div class='alert alert-danger'>Por favor, introduce una nota válida.</div>";
            exit;
        }

        $nota = floatval($_GET['nota']);
        $porcentaje = $nota * 10;

        // Determinar clase de color según la nota
        if ($nota < 0 || $nota > 10) {
            $color = 'bg-secondary';
            $mensaje = 'Nota no válida';
        } elseif ($nota < 5) {
            $color = 'bg-danger';
            $mensaje = 'Insuficiente';
        } elseif ($nota < 6) {
            $color = 'bg-warning';
            $mensaje = 'Suficiente';
        } elseif ($nota < 7) {
            $color = 'bg-primary';
            $mensaje = 'Bien'; 
        } elseif ($nota < 9) {
            $color = 'bg-info';
            $mensaje = 'Notable';
        } else {
            $color = 'bg-success';
            $mensaje = 'Sobresaliente';
        }

        // Mostrar barra de progreso
        echo "
            <div class='mb-3'>
                <h4 class='text-center'>Nota: <strong>$nota</strong> - $mensaje</h4>
            </div>
            <div class='progress' style='height: 30px;'>
                <div class='progress-bar $color' role='progressbar' style='width: {$porcentaje}%;' 
                    aria-valuenow='{$porcentaje}' aria-valuemin='0' aria-valuemax='100'>
                    {$porcentaje}% - {$mensaje}
                </div>
            </div>
        ";
    ?>
    </body>
</html>