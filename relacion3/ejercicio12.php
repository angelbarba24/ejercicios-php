<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Relación 3 - Ejercicio 12</title>
        <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body class="bg-light">
        <div class="container py-5">
            <h1 class="mb-4 text-center">Ordenación por burbuja</h1>

        <?php
            function ordenarBurbuja(&$array) {
                $n = count($array);
                for ($i = 0; $i < $n - 1; $i++) {
                    for ($j = 0; $j < $n - $i - 1; $j++) {
                        if ($array[$j] > $array[$j + 1]) {
                            $aux = $array[$j];
                            $array[$j] = $array[$j + 1];
                            $array[$j + 1] = $aux;
                        }
                    }
                }
            }

            $datos = ['Pérez','García','López','Márquez','Álvarez','Domínguez','Ruíz','Díaz'];
            echo "<h4>Array original (strings):</h4>";
            echo "<p>" . implode(", ", $datos) . "</p>";

            ordenarBurbuja($datos);
            echo "<h4>Array ordenado:</h4>";
            echo "<p>" . implode(", ", $datos) . "</p>";

            $numeros = [42, 7, 19, 3, 88, 15];
            echo "<h4 class='mt-4'>Array original (números):</h4>";
            echo "<p>" . implode(", ", $numeros) . "</p>";

            ordenarBurbuja($numeros);
            echo "<h4>Array ordenado:</h4>";
            echo "<p>" . implode(", ", $numeros) . "</p>";
        ?>
        </div>
    </body>
</html>