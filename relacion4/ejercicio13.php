<?php
    // Declaración de array asociativo con 3 socios
    $socios = [
        [
            "nombre" => "Ana",
            "apellidos" => "Martínez López",
            "edad" => 25
        ],
        [
            "nombre" => "Carlos",
            "apellidos" => "Gómez Ruiz",
            "edad" => 30
        ],
        [
            "nombre" => "Lucía",
            "apellidos" => "Fernández Pérez",
            "edad" => 28
        ]
    ];

    // Mostrar el array original
    echo "Array asociativo original:\n";
    print_r($socios);

    // Convertir el array en JSON
    $jsonSocios = json_encode($socios);
    echo "\n\nConvertido a JSON:\n";
    echo $jsonSocios;

    // Convertir el JSON de vuelta en array asociativo
    $arraySocios = json_decode($jsonSocios, true);
    echo "\n\nJSON convertido de nuevo a array asociativo:\n";
    print_r($arraySocios);

    // Convertir el JSON en objeto stdClass
    $objSocios = json_decode($jsonSocios);
    echo "\n\nJSON convertido en objeto stdClass:\n";
    print_r($objSocios);
?>