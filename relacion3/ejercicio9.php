<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Relación 3 - Ejercicio 9</title>
        <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body class="bg-light">
        <div class="container py-5">
            <h1 class="mb-4 text-center">Palabra más larga</h1>

            <form method="get" class="row g-3 justify-content-center">
                <div class="col-12 col-md-8">
                    <label for="texto" class="form-label">Introduce un texto:</label>
                    <textarea name="texto" id="texto" class="form-control" rows="4" required></textarea>
                </div>
                <div class="col-auto align-self-end">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>

       <?php
            if (isset($_GET["texto"])) {
                $texto = $_GET["texto"];
                $palabras = explode(" ", $texto);
                $palabraMasLarga = "";

                foreach ($palabras as $palabra) {
                    if (strlen($palabra) > strlen($palabraMasLarga)) {
                        $palabraMasLarga = $palabra;
                    }
                }

                echo "<div class='mt-5 text-center'>";
                echo "<h2>Resultado</h2>";
                echo "<p>La palabra más larga es: <strong>$palabraMasLarga</strong></p>";
                echo "</div>";
            }
        ?>
        </div>
    </body>
</html>