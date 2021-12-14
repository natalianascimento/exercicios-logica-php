<?php

$mes = filter_input(INPUT_POST, "num1");

$nomeMes = [
    "Janeiro",
    "Fevereiro",
    "Março",
    "Abril",
    "Maio",
    "Junho",
    "Julho",
    "Agosto",
    "Setembro",
    "Outubro",
    "Novembro",
    "Dezembro",
];

if ($mes >= 1 && $mes <= 12) {
    $resultado = $nomeMes[$mes - 1];
} else {
    $resultado = "Mês inválido";
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
        <h1>Mês do Ano</h1>
        
        <label for="num1">Número do Mês</label>
        <input type="text" id="num1" name="num1">

        <input type="submit" value="Calcular">
    </form>

    <h1><?php echo $resultado; ?></h1>

</body>
</html>


<?php

// switch ($mes) {
//     case 1:
//         $nomeMes = "Janeiro";
//         break;
//     case 2:
//         $nomeMes = "Fevereiro";
//         break;
//     case 3:
//         $nomeMes = "Março";
//         break;
//     case 4:
//         $nomeMes = "Abril";
//         break;
//     case 5:
//         $nomeMes = "Maio";
//         break;
//     case 6:
//         $nomeMes = "Junho";
//         break;
//     case 7:
//         $nomeMes = "Julho";
//         break;
//     case 8:
//         $nomeMes = "Agosto";
//         break;
//     case 9:
//         $nomeMes = "Setembro";
//         break;
//     case 10:
//         $nomeMes = "Outubro";
//         break;
//     case 11:
//         $nomeMes = "Novembro";
//         break;
//     case 12:
//         $nomeMes = "Dezembro";
//         break;
//     default: 
//         $nomeMes = "Não existe esse mês";
// }

?>