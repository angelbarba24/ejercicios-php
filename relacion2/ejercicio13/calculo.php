<?php
    $lado1 = $_GET['lado1'];
    $lado2 = $_GET['lado2'];
    $lado3 = $_GET['lado3'];

    if ($lado1 == $lado2 and $lado1 == $lado3){
        echo "El triangulo es equilátero.";
    } elseif ($lado1 == $lado2 or $lado1 == $lado3 or $lado2 == $lado3){
        echo  "El triangulo es isósceles.";
    } else {
        echo "El triangulo es escaleno.";
    }
?>