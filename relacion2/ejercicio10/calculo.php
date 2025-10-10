<?php
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    $operador = $_GET['operador'];

    $resultado = match ($operador) {
        'suma' => $numero1 + $numero2,
        'resta' => $numero1 - $numero2,
        'producto' => $numero1 * $numero2,
        'division' => $numero1 / $numero2,
        'resto' => $numero1 % $numero2,
    };
    echo "El resultado es: $resultado";
?>