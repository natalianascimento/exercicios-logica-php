<?php

$numero = filter_input(INPUT_POST, "num1");
$resultado = array();

if($numero){

    if ($numero % 2 == 0) {
        $resultado[] = "É divisível por 2. ";
    } 
    
    if ($numero % 5 == 0) {
        $resultado[] = "É divisível por 5. ";
    } 
    
    if ($numero % 10 == 0) {
        $resultado[] = "É divisível por 10. ";
    } 
    
    if (!($numero % 10 == 0) && !($numero % 5 == 0) && !($numero % 2 == 0)) {
        $resultado[] = "Não é divisível";
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
    <form method="post">
        <h1>Divisível</h1>
        
        <label for="num1">Número</label>
        <input type="text" id="num1" name="num1">

        <input type="submit" value="Calcular">
    </form>

    <h1><?php for($i = 0; $i < count($resultado); $i++) { echo $resultado[$i]; }; ?></h1>

</body>
</html>

