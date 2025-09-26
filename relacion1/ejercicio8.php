<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Relación 1 - Ejercicio 8</title>
        <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
    </head>
    <body>
        <h2>Relación 1 - Ejercicio 8</h2>

        <?php
        $rubrica = [
            'Inicial' => 0.2,
            'Primera' => 0.3,
            'Segunda' => 0.2,
            'Tercera' => 0.3
        ];
       
        $calificaciones = [
            'Inicial' => 8,
            'Primera' => 5,
            'Segunda' => 9,
            'Tercera' => 6
        ];

        $acumulador = 0;
        $media = 0;

        foreach ($rubrica as $evaluacion => $porcentaje) {
            $media += $porcentaje * $calificaciones[$evaluacion];
        }

        echo "Tu nota media es: $media", ($media >= 5) ? ". Has aprobado." : ". Has suspendido.";
        ?>
    </body>
</html>