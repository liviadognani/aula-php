<?php
function calcularMedia($a, $b, $c){
    return ($a + $b + $c) / 3;
}
$valor = calcularMedia(4, 5, 5);
echo "A média do aluno é: $valor";
?>