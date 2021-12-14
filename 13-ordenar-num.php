<?php

$resultado = [filter_input(INPUT_POST, "num1"), filter_input(INPUT_POST, "num2"), filter_input(INPUT_POST, "num3")];
rsort($resultado, SORT_NUMERIC);


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
        <h1>Ordenar Números</h1>
        
        <label for="num1">Primeiro Número</label>
        <input type="text" id="num1" name="num1">

        <label for="num2">Segundo Número</label>
        <input type="text" id="num2" name="num2">
        
        <label for="num3">Terceiro Número</label>
        <input type="text" id="num3" name="num3">
        
        <input type="submit" value="Ordenar">
    </form>
    <h1><?php 
        if ($resultado){
            for($i = 0; $i < count($resultado); $i++) {
                echo $resultado[$i] . "<br>"; 
            }
        }
    ?></h1>

</body>
</html>
