<?php
function vereficarParouImpar($numero){
    if ($numero % 2 ==0) {
        return "$numero é PAR";
    } else {
        return "$numero é ÍMPAR";
    }
}

echo vereficarParouImpar(10);
echo "<br>";
echo vereficarParouImpar(7);
?>