<?php

// $numero = 3;

// if($numero > 0){
//     $valor = $numero;
//     for ($i = $valor - 1; $i > 0 ; $valor-- ){

//     }
// }


$num = 5;

if($num > 0){
  echo $valor = $num;

  for($i = ($valor - 1); $i > 0; $i--){
    echo "<br>";
    echo "$valor X $i = ";
    echo $valor = $valor * $i;
    echo "<br>";
    }
}else{
    $valor = 0;
}

echo "<br>";
echo "!{$num} = {$valor}";