<?php
function calcularMedia($n1, $n2, $n3) {
    return ($n1 + $n2 + $n3) / 3; 
}

function verificarSituacao($media){
    if($media >= 7){
        return "Aprovado";
    }
    else {
        return "Reprovado";
    }
}

?>