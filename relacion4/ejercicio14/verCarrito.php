<?php
    // Capturar la cookie
    if (isset($_COOKIE["carrito"])) {
        $jsonCarrito = $_COOKIE["carrito"];

        echo "Contenido de la cookie (JSON):<br>";
        echo $jsonCarrito . "<br><br>";

        // Convertir a array asociativo
        $arrayCarrito = json_decode($jsonCarrito, true);
        echo "JSON convertido a array asociativo:<br>";
        print_r($arrayCarrito);
        echo "<br><br>";

        // Convertir a objeto stdClass
        $objCarrito = json_decode($jsonCarrito);
        echo "JSON convertido a objeto stdClass:<br>";
        print_r($objCarrito);
    } else {
        echo "No existe la cookie del carrito.";
    }
?>