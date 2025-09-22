<?php

function soma($a, $b) {
    echo $a + $b;
}

soma(10,9);

function soma2($a, $b) {
    return $a + $b;
}

$resultado = soma(10,9);
echo "Resultado: $resultado";
?>