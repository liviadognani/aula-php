<?php
$total = 0;
$produtos = [
    "Arroz" => 20.00,
    "Feijão" => 10.00,
    "Macarrão" =>5.00,
    "Leite" => 8.00,
    "Café" => 6.00,
];

foreach ($produtos as $chave => $valor) {
    
    echo "Produto: $chave - Preço : $valor<br>";
     $total += $valor;

}
echo "<br> Valor total da compra : $total";

?>