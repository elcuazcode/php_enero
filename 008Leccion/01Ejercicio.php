<?php

// Suma de todos los elementos de un array

$numeros = [1, 2, 3, 4];

$suma = 0;

foreach ($numeros as $numero){
  $suma += $numero;
  //$suma = $suma + $numero;
}

echo "La suma de todos los numero dentro del array es $suma ";

?>