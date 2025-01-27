<?php

// Dado un array de numeros encontrar el elemento de mayor valor

$numeros = [3, 4, 5, 8, 13, 6];
$mayor = $numeros[0];  // Esto es como valor incial

foreach($numeros as $numero){

  if ($numero > $mayor){
    $mayor = $numero;
  }
}

echo "El numero mayor dentro del array es: $mayor";



?>