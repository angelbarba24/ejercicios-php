<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relación 1 - Ejercicio 2</title>
    <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
</head>
<body>
    <h1>Hola mundo en php</h1>
    <h3 style="color: red;">Prueba en rojo</h3>
    <?php
        $nombre = "Ángel";  // Las variables empiezan por $ y no son fuertemente tipadas
        echo "Hola, $nombre";   // Una variable entre comillas dobles es sustituida por su valor
        echo '<br>Hola mundo';  // Puedo usar comillas simples
        echo '<br>Hola, ', $nombre; // La variable con $ no se interpreta entre comillas simples
        echo "<br>Hola, ", strtoupper($nombre);
        /* echo "<br>", phpversion();
        echo phpinfo(); */
        echo "<br>".date("d/m/Y H:i:s");
        const PI = "3.1416"; // Declaración de constante, nombre todo en mayúsculas
    ?>
</body>
</html>