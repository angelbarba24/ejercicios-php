<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Relación 3 - Ejercicio 13</title>
        <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body class="bg-light">
        <div class="container py-5">
            <h1 class="mb-4 text-center">Análisis de cadena de texto</h1>

            <form method="get" class="row g-3 justify-content-center">
                <div class="col-12 col-md-8">
                    <label for="texto" class="form-label">Introduce una cadena de texto:</label>
                    <input type="text" name="texto" id="texto" class="form-control" required>
                </div>
                <div class="col-auto align-self-end">
                    <button type="submit" class="btn btn-primary">Analizar</button>
                </div>
            </form>

        <?php
            if (isset($_GET["texto"])) {
                $texto = trim($_GET["texto"]);

                $reves = strrev($texto);
                $esPalindromo = strcmp(strtolower($texto), strtolower($reves)) === 0 ? "Sí" : "No";

                $palabras = explode(" ", $texto);
                $palabrasReves = implode(" ", array_reverse($palabras));

                $mayus = strtoupper($texto);
                $minus = strtolower($texto);

                $numCaracteres = strlen($texto);
                $numPalabras = count($palabras);

                $crypt = crypt($texto, "salt");
                $md5 = md5($texto);
                $sha1 = sha1($texto);

                echo "<div class='alert alert-info mt-4'><strong>Texto del revés:</strong> $reves<br><strong>¿Es palíndromo?</strong> $esPalindromo</div>";
                echo "<div class='alert alert-warning'><strong>Palabras en orden inverso:</strong> $palabrasReves</div>";
                echo "<div class='alert alert-success'><strong>Mayúsculas:</strong> $mayus<br><strong>Minúsculas:</strong> $minus</div>";
                echo "<div class='alert alert-secondary'><strong>Número de caracteres:</strong> $numCaracteres<br><strong>Número de palabras:</strong> $numPalabras</div>";
                echo "<div class='alert alert-dark'><strong>crypt:</strong> $crypt<br><strong>md5:</strong> $md5<br><strong>sha1:</strong> $sha1</div>";
            }
        ?>
        </div>
    </body>
</html>