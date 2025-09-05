<?php

$filme = "";
$genero = "";
$mensagem = "";
$imagem = "filme.png";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $filme = $_POST['filme'];
    $genero = strtolower($_POST['genero']); // transforma em minúscula para comparação

   
    if ($genero == "terror") {
        $mensagem = "<p style='color:red;'>O gênero do filme é terror!</p>";
    } elseif ($genero == "comédia") {
        $mensagem = "<p style='color:green;'>O gênero do filme é comédia!</p>";
    } else {
        $mensagem = "<p>O gênero do filme é $genero.</p>";
    }
}


include 'cabecalho.php';
?>
<?php
echo '<img src="filme.jpg" alt="filme">';
?>


<form method="POST" action="" style="text-align:center; margin-top: 20px;">
    <label>Nome do Filme: </label>
    <input type="text" name="filme" required>
    <br><br>
    <label>Gênero: </label>
    <input type="text" name="genero" required>
    <br><br>
    <input type="submit" value="Enviar">
</form>


<div style="text-align:center; margin-top: 20px;">
    <?php
    if (!empty($filme) && !empty($genero)) {
        echo "<p>Filme: <strong>$filme</strong></p>";
        echo $mensagem;
    }
    ?>
</div>

<?php

include 'rodape.php';
?>