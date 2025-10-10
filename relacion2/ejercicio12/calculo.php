<?php
    $nombre = $_GET['nombre'];
    $email = $_GET['email'];

    $rubrica = [
        'Inicial' => 0.2,
        'Primera' => 0.3,
        'Segunda' => 0.2,
        'Tercera' => 0.3
    ];

    $calificaciones = [
        'Inicial' => $_GET['Inicial'],
        'Primera' => $_GET['Primera'],
        'Segunda' => $_GET['Segunda'],
        'Tercera' => $_GET['Tercera']
    ];

    $acumulador = 0;
    $media = 0;

    foreach ($rubrica as $evaluacion => $porcentaje) {
        $media += $porcentaje * $calificaciones[$evaluacion];
    }

    echo "$nombre, con email '$email' tiene una nota media es: $media", ($media >= 5) ? ". Has aprobado." : ". Has suspendido.";
?>