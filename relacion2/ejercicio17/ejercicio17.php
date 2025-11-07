<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Relación 2 - Ejercicio 17</title>
        <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body class="bg-light">
        <div class="container vh-100 d-flex justify-content-center align-items-center">
            <div class="card shadow p-4 w-100" style="max-width: 500px;">
                <h2 class="text-center mb-4">Relación 2 - Ejercicio 17</h2>
                <form id="formulario" action=<?php echo htmlspecialchars("calculo.php")?> method="get">
                    <div class="mb-3">
                        <label for="dividendo" class="form-label">Dividendo:</label>
                        <input type="text" class="form-control" id="dividendo" name="dividendo" placeholder="Número entero positivo">
                        <div id="dividendoHelp" class="form-text text-danger" style="visibility:hidden;">Introduce un número válido.</div>
                    </div>

                    <div class="mb-3">
                        <label for="divisor" class="form-label">Divisor:</label>
                        <input type="text" class="form-control" id="divisor" name="divisor" placeholder="Número entero positivo distinto de cero">
                        <div id="divisorHelp" class="form-text text-danger" style="visibility:hidden;">Introduce un divisor válido (≠ 0).</div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">¿Qué deseas calcular?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="cociente" name="operacion[]" value="cociente">
                            <label class="form-check-label" for="cociente">Cociente</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="resto" name="operacion[]" value="resto">
                            <label class="form-check-label" for="resto">Resto</label>
                        </div>
                        <div id="operacionHelp" class="form-text text-danger" style="visibility:hidden;">Selecciona al menos una opción.</div>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Calcular</button>
                    </div>
                </form>
            </div>
        </div>

        <script src="./validacion.js"></script>
    </body>
</html>