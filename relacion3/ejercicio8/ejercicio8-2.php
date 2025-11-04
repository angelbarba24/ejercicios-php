<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Relación 3 - Ejercicio 8-2</title>
        <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body class="bg-light">
        <div class="container py-5">
            <h1 class="mb-4 text-center">Transformación de texto</h1>

            <h2>Versión 2:</h2>
            <form method="get" onsubmit="return validarV2()">
                <div class="mb-3">
                    <label for="texto2" class="form-label">Introduce un texto:</label>
                    <input type="text" name="texto2" id="texto2" class="form-control" required>
                </div>
                <div class="form-check">
                    <input type="radio" name="formato2" id="mayus2" value="mayus" class="form-check-input">
                    <label for="mayus2" class="form-check-label">Mostrar en mayúsculas</label>
                </div>
                <div class="form-check">
                    <input type="radio" name="formato2" id="minus2" value="minus" class="form-check-input">
                    <label for="minus2" class="form-check-label">Mostrar en minúsculas</label>
                </div>
                <button type="submit" class="btn btn-success mt-3">Mostrar</button>
            </form>

            <script>
            function validarV2() {
                const opciones = document.getElementsByName("formato2");
                let seleccionada = false;
                for (let i = 0; i < opciones.length; i++) {
                    if (opciones[i].checked) {
                        seleccionada = true;
                        break;
                    }
                }
                if (!seleccionada) {
                    alert("Debes seleccionar una opción: mayúsculas o minúsculas");
                    return false;
                }
                return true;
            }
        </script>

            <?php
            if (isset($_GET["texto2"]) && isset($_GET["formato2"])) {
                $texto = $_GET["texto2"];
                echo "<div class='mt-4'>";
                echo "<h4>Resultado versión 2:</h4>";
                if ($_GET["formato2"] === "mayus") {
                    echo "<p><strong>Mayúsculas:</strong> " . strtoupper($texto) . "</p>";
                } elseif ($_GET["formato2"] === "minus") {
                    echo "<p><strong>Minúsculas:</strong> " . strtolower($texto) . "</p>";
                }
                echo "</div>";
            }
            ?>
        </div>
    </body>
</html>