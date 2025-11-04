<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Relación 3 - Ejercicio 16</title>
        <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body class="bg-light">
        <div class="container py-5">
            <h1 class="mb-4 text-center">Funciones array</h1>
        <?php
            $numeros = range(1, 100);
            
            function sonPositivos($numeros){
                foreach ($numeros as $numero) {
                    $positivos = true;

                    if ($numero < 0) {
                        return false;
                    } 
                }
                return $positivos;
            }

            function multiplos5($numeros){
                foreach ($numeros as $numero) {
                    $multiplos = false;

                    if ($numero % 5 == 0) {
                        return true;
                    } 
                }
                return $multiplos;
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
            echo "<div class='alert alert-info'><strong>¿Los números son positivos?:</strong> " . (sonPositivos($numeros) ? "Sí" : "No"). "</div>";

            echo "<div class='alert alert-info'><strong>¿Hay algún múltiplo de 5?:</strong> " . (multiplos5($numeros) ? "Sí" : "No"). "</div>";

            $numerosPrimos = array_filter($numeros, fn($numero) => esPrimo($numero));
            echo "<div class='alert alert-info'><strong>Números primos:</strong> " . implode("-", $numerosPrimos) . "</div>";

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
            echo "</div>";
        ?>
        </div>
    </body>
</html>