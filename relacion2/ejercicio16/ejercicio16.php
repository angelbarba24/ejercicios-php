<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Relación 2 - Ejercicio 16</title>
        <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <link rel="stylesheet" href="estilo.css">
    </head>

    <body class="bg-light">
        <div class="container vh-100 d-flex justify-content-center align-items-center">
            <div class="card shadow p-4 w-100" style="max-width: 500px;">
                <h2 class="text-center mb-4">Relación 2 - Ejercicio 16</h2>
                <form id="formulario" action=<?php echo htmlspecialchars("calculo.php")?> method="get">
                    <div class="mb-3">
                        <label for="numero" class="form-label">Número:</label>
                        <input type="text" class="form-control" id="numero" name="numero" placeholder="Introduce un número entero positivo">
                        <div id="numeroHelp" class="form-text text-danger" style="visibility:hidden;">Introduce un número entero positivo.</div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">¿Qué deseas hacer?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="accionPrimo" name="accion" value="primo">
                            <label class="form-check-label" for="accionPrimo">Comprobar si es primo</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="accionDivisores" name="accion" value="divisores">
                            <label class="form-check-label" for="accionDivisores">Mostrar divisores</label>
                        </div>
                        <div id="accionHelp" class="form-text text-danger" style="visibility:hidden;">Selecciona una opción.</div>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
        <script src="./validacion.js"></script>
    </body>
</html>