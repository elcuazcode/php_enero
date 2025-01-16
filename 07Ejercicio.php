<?php

// Imprimir los primero 5 numeros pares

$i = 2;
$contador = 0;

while ($contador < 5){    // La condicion dicta que el contador debe ser menor a 5
  echo $i. " ". "\n";    // Imprimir la variable
  $i += 2;               // al valor actual se le suma 2 en cada iteracion
  $contador++;           // su ultimo valor 4, cuando intenta entrar con 5 se detien.
}




?>