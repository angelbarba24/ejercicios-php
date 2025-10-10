<?php
    $nota1 = $_GET['nota1'];
    $nota2 = $_GET['nota2'];
    $faltas = $_GET['faltas'];

    $media = (($nota1 + $nota2) / 2) - $faltas * 0.25; 

    echo "Tu nota media es: $media", ($media >= 5) ? ". Has aprobado." : ". Has suspendido.";
?>