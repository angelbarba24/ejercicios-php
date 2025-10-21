<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Relación 2 - Ejercicio 1</title>
        <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body class="bg-black">
        <div class="container bg-white m-5 py-5 px-5 shadow p-3 mb-5 w-50 rounded mx-auto">
            <h2>Relación 2 - Ejercicio 1</h2>

            <form action="" method="get">
                <div>
                    <label class="form-label" for="numero1">Introduce número 1:</label>
                    <input class="form-control" type="number" step="0.01" name="numero1" id="numero1">
                </div>
                <div>
                    <label for="operador">Elige operador:</label>
                    <select class="form-select" name="operador" id="operador">
                        <option value="suma">+</option>
                        <option value="resta">-</option>
                        <option value="producto">*</option>
                        <option value="division">/</option>
                        <option value="resto">%</option>
                    </select>
                </div>
                <div>
                    <label class="form-label" for="numero2">Introduce número 2:</label>
                    <input class="form-control" type="number" step="0.01" name="numero2" id="numero2">
                </div>
                <input class="form-control my-3" type="submit" value="Enviar">
            </form>
        </div>
    </body>
</html>