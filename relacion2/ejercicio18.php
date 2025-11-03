<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Relación 2 - Ejercicio 18</title>
        <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="bg-light">
        <div class="container vh-100 d-flex justify-content-center align-items-center">
            <div class="card shadow p-4 w-100" style="max-width: 500px;">
                <h2 class="text-center mb-4 text-primary">Relación 2 - Ejercicio 18</h2>
                <form class="shadow p-3 rounded" action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
                    <div class="card-body text-center">
                        <label for="numero">Introduce un número:</label>
                        <input type="number" min="0" class="form-control my-3" name="numero" id="numero" required>
                        <button type="submit" class="btn btn-primary">Convertir a binario</button>
                    </div>
                    <p>
                        <?php
                            $numero = (int) $_GET['numero'];

                            if (!is_int($numero) || $numero < 0) {
                                echo "<div class='alert alert-danger'>Error: el valor debe ser un número natural (entero ≥ 0).</div>";
                            } elseif ($numero === 0) {
                                echo "<p class='fs-5'>El binario de 0 es <strong>0</strong>.</p>";
                            } else {
                                $restos = [];
                                $n = $numero;

                                while ($n > 0) {
                                    $resto = $n % 2;
                                    array_push($restos, $resto);
                                    $n = intdiv($n, 2);
                                }

                                $binario = implode(array_reverse($restos));

                                echo "<p class='fs-5'>Decimal <strong>$numero</strong> = Binario <strong>$binario</strong></p>";
                            }
                        ?>
                    </p>
                </form>
            </div>
        </div>
    </body>
</html>