<?php

// GENERAR UN PATRON DE ASTERISCOS
// UTILIZANDO FOR


$filas = 5;

for ($i = 1; $i <= $filas; $i++){  // Se cumple, se ejecuta lo que tiene adentro
  echo "----------------";
  for ($j=1; $j <= $i; $j++){
    echo "* ";                     // Esto se ejecuta mientras sea cierto
  }                                // La primera vez, solo una vez 
  echo "\n";                       // La segunda vez, dos veces
}


?>