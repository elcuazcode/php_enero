<?php


// CALCULAR EL FACTORIAL DE UN NUMERO 

$numero = 5;                   
$factorial = 1;
$temp = $numero;

while ($temp > 1){
  $factorial = $factorial * $temp;
  $temp--;
  echo $temp;
}

echo "El factorial de $numero es $factorial ";




?>