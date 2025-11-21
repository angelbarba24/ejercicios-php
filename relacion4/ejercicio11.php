<?php
    // Objeto de tipo stdClass
    $moduloDWES = new stdClass();

    // Añadir atributos dinámicamente
    $moduloDWES->modulo = "Desarrollo Web en Entorno Servidor";
    $moduloDWES->acronimo = "DWES";
    $moduloDWES->curso = 2;
    $moduloDWES->descripcion = "Programación en PHP, gestión de sesiones, acceso a bases de datos, seguridad.";
    $moduloDWES->teacher = "Profesor García";

    // Objeto orignal
    echo "Objeto stdClass original:\n";
    print_r($moduloDWES);

    // Convertir el objeto a array
    $arrayDWES = (array) $moduloDWES;
    echo "\nConvertido a array:\n";
    print_r($arrayDWES);

    // Convertir el array a objeto
    $objDWES = (object) $arrayDWES;
    echo "\nConvertido de nuevo a objeto stdClass:\n";
    print_r($objDWES);
?>