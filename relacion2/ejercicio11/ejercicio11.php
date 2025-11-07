<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Relación 2 - Ejercicio 11</title>
        <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <div id="wrapper" class="d-flex justify-content-center align-items-center">
            <form class="shadow p-3 rounded" action=<?php echo htmlspecialchars("calculo.php")?> method="get">
                <h2>Relación 2 - Ejercicio 11</h2>
                <div>
                    <label class="form-label" for="nota1">Introduce la nota 1:</label>
                    <input class="form-control" type="number" name="nota1" id="nota1" min="0" max="10">
                </div>
                <div>
                    <label class="form-label" for="nota2">Introduce la nota 2:</label>
                    <input class="form-control" type="number" name="nota2" id="nota2" min="0" max="10">
                </div>
                <div>
                    <label class="form-label" for="faltas">Introduce el número de faltas:</label>
                    <input class="form-control" type="number" name="faltas" id="faltas" min="0">
                </div>
                <input class="form-control my-3" type="submit" value="Enviar">
            </form>
        </div>

        <p id="resultado" class="text-center"></p>
    </body>
</html>