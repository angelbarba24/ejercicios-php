<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Relación 3 - Ejercicio 8-1</title>
        <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body class="bg-light">
        <div class="container py-5">
            <h1 class="mb-4 text-center">Transformación de texto</h1>

            <h2>Versión 1:</h2>
            <form method="get" onsubmit="return validarV1()" class="mb-5">
                <div class="mb-3">
                    <label for="texto1" class="form-label">Introduce un texto:</label>
                    <input type="text" name="texto1" id="texto1" class="form-control" required>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="mayus" id="mayus" class="form-check-input">
                    <label for="mayus" class="form-check-label">Mostrar en mayúsculas</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="minus" id="minus" class="form-check-input">
                    <label for="minus" class="form-check-label">Mostrar en minúsculas</label>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Mostrar</button>
            </form>

            <script>
                function validarV1() {
                    const mayus = document.getElementById("mayus");
                    const minus = document.getElementById("minus");
                    if (!mayus.checked && !minus.checked) {
                        alert("Selecciona al menos una opción (mayúsculas o minúsculas)");
                        return false;
                    }
                    return true;
                }
            </script>

            <?php
            if (isset($_GET["texto1"])) {
                $texto = $_GET["texto1"];
                echo "<div class='mb-5'>";
                echo "<h4>Resultado versión 1:</h4>";
                if (isset($_GET["mayus"])) {
                    echo "<p><strong>Mayúsculas:</strong> " . strtoupper($texto) . "</p>";
                }
                if (isset($_GET["minus"])) {
                    echo "<p><strong>Minúsculas:</strong> " . strtolower($texto) . "</p>";
                }
                echo "</div>";
            }
            ?>
    </body>
</html>