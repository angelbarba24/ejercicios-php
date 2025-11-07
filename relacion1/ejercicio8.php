<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Relación 1 - Ejercicio 8</title>
    </head>
    <body>

    <h2>Relación 1 - Ejercicio 8</h2>

    <?php
    // Array asociativo con la rúbrica (peso de cada calificación)
    $rubrica = [
        'inicial' => 0.2,
        'primera' => 0.3,
        'segunda' => 0.2,
        'tercera' => 0.3
    ];

    // Array asociativo con las notas del alumno
    $notas = [
        "inicial" => 6.5,
        "primera" => 7.0,
        "segunda" => 8.0,
        "tercera" => 7.5
    ];

    // Cálculo de la nota final
    $nota_final = 0;
    foreach ($rubrica as $clave => $peso) {
        $nota = $notas[$clave];
        $nota_final += $nota * $peso;
    }

    // Mostrar resultado
    echo "<p>Nota final: " . number_format($nota_final, 2) . "</p>";
    if ($nota_final >= 5) {
        echo "<p>¡Aprobado!</p>";
    } else {
        echo "<p>No aprobado.</p>";
    }
    ?>

    </body>
</html>