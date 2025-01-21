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

// El primer caso se evalua 5 * 1
// Luego va 5 * 4 * 3 * 2 
// ya no se vuelve a multiplicar * 1 porque ya se realizo en el principio
// ahi termina el while


?>