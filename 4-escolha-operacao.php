<?php

$numeroA = filter_input(INPUT_POST, "num1");
$numeroB = filter_input(INPUT_POST, "num2");
$operacao = filter_input(INPUT_POST, "operacao");
$resultado = " ";

if ($numeroA && $numeroB) {
    switch ($operacao) {
        case 1:
            $resultado = $numeroA + $numeroB;
            break;
        case 2:
            $resultado = $numeroA - $numeroB;
            break;
        case 3:
            $resultado = $numeroA * $numeroB;
            break;
        case 4:
            $resultado = $numeroA / $numeroB;
            break;
            
    }
    if($operacao = 1 && $resultado > 20) {
        $resultado += 8;
    } elseif ($operacao = 1 && $resultado < 20) {
        $resultado -= 5;
    } 
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
    <form action="4-escolha-operacao.php" method="post">
        <h1>Operações Matemáticas</h1>
        
        <label for="num1">Primeiro Número</label>
        <input type="text" id="num1" name="num1">

        <label for="num2">Segundo Número</label>
        <input type="text" id="num2" name="num2">

        <select name="operacao">
            <option value="1" selected>Soma</option>
            <option value="2">Subtração</option>
            <option value="3">Multiplicação</option>
            <option value="4">Divisão</option>
        </select>

        <input type="submit" value="Calcular">
    </form>
    <h1><?php echo $resultado; ?></h1>
</body>
</html>
