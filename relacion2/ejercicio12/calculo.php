<?php
$nombre = htmlspecialchars(filter_input(INPUT_GET, 'nombre', FILTER_SANITIZE_SPECIAL_CHARS));
$email = filter_input(INPUT_GET, 'email', FILTER_SANITIZE_EMAIL);

if (!preg_match('/^[\w\.-]+@[\w\.-]+\.\w{2,}$/', $email)) { // /w representa cualquier valor entre a-z, A-Z y 0-9
    die("Error: El email no es válido."); // Finaliza la ejecución del script PHP y muestra ese mensaje como resultado
}

$calificaciones = [];
$campos = ['inicial', 'primera', 'segunda', 'tercera'];

foreach ($campos as $campo) {
    $valor = filter_input(INPUT_GET, $campo, FILTER_VALIDATE_FLOAT);
    if ($valor === false || $valor < 0 || $valor > 10) {
        die("Error: La calificación '$campo' no es válida.");
    }
    $calificaciones[$campo] = $valor;
}

$rubrica = [
    'inicial' => 0.2,
    'primera' => 0.3,
    'segunda' => 0.2,
    'tercera' => 0.3
];

$acumulador = 0;
$media = 0;

foreach ($rubrica as $evaluacion => $porcentaje) {
    $media += $porcentaje * $calificaciones[$evaluacion];
}

echo "$nombre, con email '$email' tiene una nota media es: $media", ($media >= 5) ? ". Has aprobado." : ". Has suspendido.";
?>