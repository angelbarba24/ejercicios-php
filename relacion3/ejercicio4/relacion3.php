<?php
function obtenerPrimosHasta($numero) {
    if ($numero > 1) {
        echo "<h4>Los número primos entre el 1 y el ", $numero, " son:</h4><br>";
        for ($i = 2; $i < $numero; $i++) {
            $esPrimo = true;
            for ($j = 2; $j < $i && $esPrimo == True; $j++) {
                if ($i % $j == 0) {
                    $esPrimo = false;
                }
            }
            if ($esPrimo) {
                echo $i . " ";
            }
        }
    } else {
        echo "El número debe de ser un número natural mayor que 1.";
    }
}

function factorial($numero) {
    if ($numero > 0) {
        if ($numero == 1) {
            return 1;
        } else {
            return $numero * factorial($numero - 1);
        }
    } else {
        echo "El número debe de ser un número natural mayor que 0.";
    }
}

function mcd($numero1, $numero2) {
    if ($numero1 > 0 && $numero2) {
        if ($numero1 == $numero2) {
            return $numero1;
        } else {
            if ($numero1 > $numero2){
                return mcd($numero2, $numero1 - $numero2);
            } else {
                return mcd($numero1, $numero2 - $numero1);
            }
        }
    } else {
        echo "El número debe de ser un número natural mayor que 0.";
    }
}
?>