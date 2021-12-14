<?php

$nome = filter_input(INPUT_POST, "num1");
$idade = filter_input(INPUT_POST, "num2");
$sexo = filter_input(INPUT_POST, "operacao");

if ($idade < 25 && $sexo == 1){
    $resultado = "$nome foi ACEITA!";
} else {
    $resultado = "NÃO ACEITO.";
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
        <h1>Aceita ou Não Aceita</h1>
        
        <label for="num1">Nome</label>
        <input type="text" id="num1" name="num1">

        <label for="num2">Idade</label>
        <input type="text" id="num2" name="num2">

        <select name="operacao">
            <option value="1" selected>Feminino</option>
            <option value="2">Masculino</option>
        </select>
        
        <input type="submit" value="Calcular">
    </form>
    <h1><?php echo $resultado; ?></h1>
</body>
</html>
