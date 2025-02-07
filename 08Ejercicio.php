<?php

// Funcion que sume todos los elementos de un array
// Los arrays pueden pasarse como argumentos
// foreach permite iterar sobre un areglo

// Crear la funcion, que acepte un parametro
function suma($array){
  // escribir la logica necesaria
  // para su funcionamiento
  $suma = 0;
  foreach ($array as $valor){
    $suma = $suma + $valor;
  }
  return $suma;
}

$areglo = [1, 2, 3, 4];
$calculo = suma($areglo);

echo $calculo;


?>