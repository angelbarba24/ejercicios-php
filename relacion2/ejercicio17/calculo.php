<?php
if (isset($_GET['dividendo']) && isset($_GET['divisor']) && isset($_GET['operacion'])) {
    $dividendo = $_GET['dividendo'];
    $divisor = $_GET['divisor'];
    $operaciones = $_GET['operacion'];

        $dividendo = (int)$dividendo;
        $divisor = (int)$divisor;

        echo "<p><strong>Dividendo:</strong> $dividendo</p>";
        echo "<p><strong>Divisor:</strong> $divisor</p>";

        if (in_array("cociente", $operaciones)) {
            $cociente = intdiv($dividendo, $divisor);
            echo "<p><strong>Cociente:</strong> $cociente</p>";
        }

        if (in_array("resto", $operaciones)) {
            $resto = $dividendo % $divisor;
            echo "<p><strong>Resto:</strong> $resto</p>";
        }

}
?>