<?php

$numeroA = filter_input(INPUT_POST, "num1");
$numeroB = filter_input(INPUT_POST, "num2");
$resultado = "0";

if($numeroA < $numeroB) {
    $proporcao = "menor";
} else {
    $proporcao = "maior";
}

$resultado = "A $proporcao que B";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <h1>Ordem Crescente</h1>
        
        <label for="num1">Número A</label>
        <input type="text" id="num1" name="num1">

        <label for="num2">Número B</label>
        <input type="text" id="num2" name="num2">

        <input type="submit" value="Calcular">
    </form>
    <h1><?php echo $resultado; ?></h1>
</body>
</html>