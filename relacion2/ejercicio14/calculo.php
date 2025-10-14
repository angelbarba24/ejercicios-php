<?php
    $nota = $_GET['nota'];
    
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

<?php
    $porcentaje = $nota * 10;

    // Determinar clase de color según la nota
    if ($nota < 5) {
        $color = 'bg-danger';
        $mensaje = 'Insuficiente';
    } elseif ($nota < 7) {
        $color = 'bg-warning';
        $mensaje = 'Suficiente';
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
                {$porcentaje}%
            </div>
        </div>
    ";
?>