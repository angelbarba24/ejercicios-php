<?php
    // Array asociativo con artículos del carrito
    $carrito = [
        [
            "codigo" => "A101",
            "nombre" => "Teclado mecánico",
            "unidades" => 2
        ],
        [
            "codigo" => "B205",
            "nombre" => "Ratón inalámbrico",
            "unidades" => 1
        ],
        [
            "codigo" => "C309",
            "nombre" => "Monitor 24 pulgadas",
            "unidades" => 3
        ]
    ];

    // Convertir a JSON
    $jsonCarrito = json_encode($carrito);

    // Mostrar el JSON por pantalla
    echo "Carrito convertido a JSON:<br>";
    echo $jsonCarrito;

    // Guardar en cookie
    setcookie("carrito", $jsonCarrito);

    // Botón para ir a la segunda página
    echo '<br><br><button onclick="window.location.href=\'verCarrito.php\'">Ver carrito</button>';
?>