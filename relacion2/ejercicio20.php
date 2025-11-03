<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Relación 2 - Ejercicio 20</title>
        <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="bg-light">
        <div class="container vh-100 d-flex justify-content-center align-items-center">
            <div class="card shadow p-4 w-100" style="max-width: 600px;">
                <h2 class="text-center mb-4 text-primary">Conversión de base</h2>
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
                    <div class="mb-3">
                        <label for="numero" class="form-label">Número decimal:</label>
                        <input type="number" min="0" class="form-control" name="numero" id="numero" required>
                    </div>

                    <div class="mb-3">
                        <label for="base" class="form-label">Selecciona operación:</label>
                        <select class="form-select" name="base" id="base" required>
                            <option value="" disabled selected>Selecciona operación</option>
                            <option value="2">Binario</option>
                            <option value="8">Octal</option>
                            <option value="16">Hexadecimal</option>
                        </select>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Convertir</button>
                    </div>
                </form>

                <div class="mt-4 text-center">
                    <?php
                    if (isset($_GET['numero']) && isset($_GET['base']) && $_GET['base'] !== "") {
                        $numero = (int) $_GET['numero'];
                        $base = (int) $_GET['base'];

                        if ($numero < 0) {
                            echo "<div class='alert alert-danger'>Error: el número debe ser natural (≥ 0).</div>";
                        } elseif ($numero === 0) {
                            echo "<p class='fs-5'>El número 0 en base $base es <strong>0</strong>.</p>";
                        } else {
                            $restos = [];
                            $n = $numero;

                            while ($n > 0) {
                                $digito = $n % $base;

                                $restos[] = match (true) {
                                    $base === 16 && $digito > 9 => chr(55 + $digito),
                                    default => $digito
                                };

                                $n = intdiv($n, $base);
                            }

                            $resultado = implode(array_reverse($restos));

                            echo "<p class='fs-5'>Decimal: <strong>$numero</strong></p>";
                            echo "<p class='fs-5'>Base $base: <strong>$resultado</strong></p>";
                        }
                    }s
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>