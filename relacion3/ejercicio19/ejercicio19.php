<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Relación 3 - Ejercicio 19</title>
        <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body class="bg-light">
        <div class="container py-5">
            <h1 class="mb-4 text-center">Carta de platos con imágenes</h1>
            <?php
            $menu = [
                'entrante' => ['Ensalada César', 'Hummus', 'Boquerones al natural', 'Boquerones al natural'],
                'primero' => ['Gazpachuelo', 'Salmorejo', 'Ajo Blanco', 'Ajo Blanco'],
                'segundo' => ['Fritura Malagueña', 'Conejo al ajillo', 'Pisto con huevo', 'Pisto con huevo'],
                'postre' => ['Helado 3 sabores', 'Flan', 'Tarta de Queso', 'Tarta de Queso']
            ];

            $imagenesPrimeros = [
                'Gazpachuelo' => 'img/gazpachuelo.jpg',
                'Salmorejo' => 'img/salmorejo.jpg',
                'Ajo Blanco' => 'img/ajo_blanco.jpg'
            ];

            $nMenus = 5;

            function generarMenu($menu) {
                return [
                    'entrante' => $menu['entrante'][array_rand($menu['entrante'])],
                    'primero' => $menu['primero'][array_rand($menu['primero'])],
                    'segundo' => $menu['segundo'][array_rand($menu['segundo'])],
                    'postre' => $menu['postre'][array_rand($menu['postre'])]
                ];
            }

            echo "<div class='container mt-4'>";
            echo "<h2 class='mb-4'>Menús sugeridos</h2>";
            for ($i = 1; $i <= $nMenus; $i++) {
                $sugerencia = generarMenu($menu);
                echo "<div class='card mb-3'>";
                echo "<div class='card-header bg-primary text-white'>Menú #$i</div>";
                echo "<div class='card-body'>";
                echo "<p><strong>Entrante:</strong> {$sugerencia['entrante']}</p>";
                echo "<p><strong>Primero:</strong> {$sugerencia['primero']}</p>";
                echo "<p><strong>Segundo:</strong> {$sugerencia['segundo']}</p>";
                echo "<p><strong>Postre:</strong> {$sugerencia['postre']}</p>";

                $platoPrimero = $sugerencia['primero'];
                if (array_key_exists($platoPrimero, $imagenesPrimeros)) {
                    $urlImagen = $imagenesPrimeros[$platoPrimero];
                    echo "<img src='$urlImagen' alt='$platoPrimero' class='img-fluid mt-3 rounded'>";
                }

                echo "</div>";
                echo "</div>";
            }
            echo "</div>";
            ?>
        </div>
    </body>
</html>