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

    // Serializar objeto
    $serializedDWES = serialize($moduloDWES);
    echo "\nSerializado:\n";
    print_r($serializedDWES);

    // Deserializar objeto
    $unserializedDWES = unserialize($serializedDWES);
    echo "\nDeserializado:\n";
    print_r($unserializedDWES);
?>