<?php
//Se o formulário foi enviado
if (isset($_POST['numero'])) {
    $num = $_POST['numero'];

    echo "<h3>Tabuada do $num</h3>";

    for ($i = 1; $i <= 10; $i++) {
        $resultado = $num * $i;
        echo "$num x $i = $resultado <br>";
    }
}
?>

<form method="post" action="">
    <label>Digite um número: </label>
    <input type="number" name="numero" required>
    <input type="submit" value="Gerar Tabuada">


</form>