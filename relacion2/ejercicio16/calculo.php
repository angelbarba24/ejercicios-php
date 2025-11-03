<?php
if (isset($_GET['numero']) && isset($_GET['accion'])) {
    $numero = $_GET['numero'];
    $accion = $_GET['accion'];

        if ($accion === "primo") {
           if ($numero > 1) {
                $primo = True;
                for ($i = 2; $i < $numero && $primo == True; $i++) {
                    if ($numero % $i == 0) {
                        $primo = False;
                    }
                }
                if ($primo) {
                    echo "El número $numero es primo.";
                } else {
                    echo "El número $numero no es primo, divisor: ", $i-1;
                }

            } else {
                echo "El número debe de ser un número natural mayor que 1.";
            }
        } elseif ($accion === "divisores") {
            if ($numero > 0) {
                for ($i = 1; $i <= $numero; $i++) {
                    if ($numero % $i == 0) {
                        echo "<span class='divisor'>$i </span>";
                    }
                }
            } else {
                echo "El número debe de ser mayor que 0.";
            }
        } else {
            echo "Acción no válida.";
        }
    } else {
        echo "Por favor, introduce un número entero positivo.";
    }
?>