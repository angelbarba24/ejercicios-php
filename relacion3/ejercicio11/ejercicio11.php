<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Relación 3 - Ejercicio 11</title>
        <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body class="bg-light">
        <div class="container py-5">
            <h1 class="mb-4 text-center">Intercambio e inversión de array</h1>

        <?php
            include("functionsRel3.php");

            $numeros = [10, 20, 30, 40, 50];

            echo "<p><strong>Array original:</strong> " . implode(", ", $numeros) . "</p>";

            invertirArray($numeros);

            echo "<p><strong>Array invertido:</strong> " . implode(", ", $numeros) . "</p>";
        ?>
        </div>
    </body>
</html>