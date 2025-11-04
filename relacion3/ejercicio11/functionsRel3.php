<?php
    function swap(&$n1, &$n2) {
        $aux = $n1;
        $n1 = $n2;
        $n2 = $aux;
    }

    function invertirArray(&$array) {
        $inicio = 0;
        $fin = count($array) - 1;
        while ($inicio < $fin) {
            swap($array[$inicio], $array[$fin]);
            $inicio++;
            $fin--;
        }
    }
?>