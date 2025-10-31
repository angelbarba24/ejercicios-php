<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Relación 3 - Ejercicio 6</title>
        <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body class="bg-light">
        <div class="container py-5">
            <h1 class="mb-4 text-center">Simulación de lanzamientos de dados</h1>

            <form method="get" class="row g-3 justify-content-center">
                <div class="col-auto">
                    <label for="tiradas" class="form-label">Número de tiradas:</label>
                    <input type="number" name="tiradas" id="tiradas" class="form-control" min="1" required>
                </div>
                <div class="col-auto align-self-end">
                    <button type="submit" class="btn btn-primary">Simular</button>
                </div>
            </form>

        <?php
            $tiradas = $_GET["tiradas"];
            $dadoJusto = array_fill(1, 6, 0);
            $dadoTrucado = array_fill(1, 6, 0);
            $carasTrucado = [1, 2, 3, 4, 5, 6, 6, 6];

            for ($i = 0; $i < $tiradas; $i++) {
                $dadoJusto[rand(1, 6)]++;
                $dadoTrucado[$carasTrucado[array_rand($carasTrucado)]]++;
            }

            echo "<div class='mt-5'>";
            echo "<h2 class='text-center'>Resultados tras $tiradas tiradas</h2>";
            echo "<table class='table table-bordered table-striped mt-3'>";
            echo "<thead class='table-dark'><tr><th>Cara</th><th>Dado Justo</th><th>Dado Trucado</th></tr></thead><tbody>";
            for ($i = 1; $i <= 6; $i++) {
                echo "<tr><td>$i</td><td>{$dadoJusto[$i]}</td><td>{$dadoTrucado[$i]}</td></tr>";
            }
            echo "</tbody></table></div>";
        ?>
        </div>
    </body>
</html>