<?php

$notas = [filter_input(INPUT_POST, "num1"), filter_input(INPUT_POST, "num2"), filter_input(INPUT_POST, "num3")];

if ($notas){
    $soma = 0;

    for($i = 0; $i < count($notas) ; $i++) {
        $soma += $notas[$i];
    }

    $media = $soma / count($notas);
}

$resultado = " ";

if ($media < 6) {
    $resultado = "Não aprovado";
} else {
    $resultado = "Aprovado";
}

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
        <h1>Média Aluno</h1>
        
        <label for="num1">Nota A</label>
        <input type="text" id="num1" name="num1">

        <label for="num2">Nota B</label>
        <input type="text" id="num2" name="num2">
        
        <label for="num2">Nota C</label>
        <input type="text" id="num3" name="num3">

        <input type="submit" value="Calcular">
    </form>
    <h1><?php echo $resultado; ?></h1>
</body>
</html>
