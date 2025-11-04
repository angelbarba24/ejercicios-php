<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Relación 3 - Ejercicio 17</title>
        <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body class="bg-light">
        <div class="container py-5">
            <h1 class="mb-4 text-center">Funciones array II</h1>
        <?php
        $numeros = range(1, 100);
        $otrosNumeros = [10, 22, 33, 50, 75, 100];

        function hayMultiploDe5($numeros) {
            return !empty(array_filter($numeros, fn($n) => $n % 5 === 0));
        }

        function esPrimo($numero) {
            if ($numero < 2) {
                return false;
            }
            for ($i = 2; $i <= sqrt($numero); $i++) {
                if ($numero % $i == 0) {
                    return false;
                }
            }
            return true;
        }

        function cifrasIdenticas($numero) {
            return $numero >= 10 && $numero < 100 && ($numero % 10) === intval($numero / 10);
        }

        echo "<div class='mt-5'>";
        echo "<div class='alert alert-info'><strong>Cantidad de números pares:</strong> " . count(array_filter($numeros, fn($n) => $n % 2 === 0)) . "</div>";

        echo "<div class='alert alert-info'><strong>¿Hay algún múltiplo de 5?:</strong> " . (hayMultiploDe5($numeros) ? "Sí" : "No") . "</div>";

        $primos = array_filter($numeros, fn($n) => esPrimo($n));
        echo "<div class='alert alert-info'><strong>Números primos:</strong> " . implode("-", $primos) . "</div>";

        $coincidencia = array_filter($numeros, fn($numero) => cifrasIdenticas($numero));
        $coincidencia = array_values($coincidencia);
        if ($coincidencia !== false) {
            echo "<div class='alert alert-info'><strong>Primera ocurrencia con cifras idénticas: </strong>" . $coincidencia[0] . "</div>";
        } else {
            echo "<div class='alert alert-warning'><strong>No se encontró ningún número con cifras idénticas.</strong></div>";
        }

        $arrayAlCuadrado = array_map(fn($numero) => $numero * $numero, $numeros);
        echo "<div class='alert alert-info'><strong>Números al cuadrado:</strong> " . implode("-", $arrayAlCuadrado) . "</div>";

        array_walk($numeros, fn(&$numero) => $numero = $numero * 2);
        echo "<div class='alert alert-info'><strong>Números x2:</strong> " . implode("-", $numeros) . "</div>";

        $comunes = array_intersect($numeros, $otrosNumeros);
        echo "<div class='alert alert-info'><strong>Valores comunes:</strong> " . implode("-", $comunes) . "</div>";
        echo "</div>";
        ?>
        </div>
    </body>
</html>