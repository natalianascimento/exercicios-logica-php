
<?php

$numeroA = filter_input(INPUT_POST, "num1");
$resultado = " ";

if($numeroA % 2 == 0) {
    $resultado = "Par";
} else {
    $resultado = "Ímpar";
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
        <h1>Par ou Ímpar</h1>
        
        <label for="num1">Número</label>
        <input type="text" id="num1" name="num1">

        <input type="submit" value="Calcular">
    </form>
    <h1><?php echo $resultado; ?></h1>
</body>
</html>