<?php
    $nombre = $_GET['nombre'];
    $email = $_GET['email'];

    $rubrica = [
        'inicial' => 0.2,
        'primera' => 0.3,
        'segunda' => 0.2,
        'tercera' => 0.3
    ];

    $calificaciones = [
        'inicial' => $_GET['inicial'],
        'primera' => $_GET['primera'],
        'segunda' => $_GET['segunda'],
        'tercera' => $_GET['tercera']
    ];

    $acumulador = 0;
    $media = 0;

    foreach ($rubrica as $evaluacion => $porcentaje) {
        $media += $porcentaje * $calificaciones[$evaluacion];
    }

    echo "$nombre, con email '$email' tiene una nota media es: $media", ($media >= 5) ? ". Has aprobado." : ". Has suspendido.";
?>