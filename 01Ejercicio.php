<?php

// DETERMINAR SI UN NUMERO ES NEGATIVO, POSITIVO O ES CERO

$numero = readline("Ingrese un numero: ");

if ($numero > 0){
  echo "El numero es positivo ";
} elseif ($numero < 0) {
  echo "El numero es negativo ";
} else {
  echo "ESte numero '$numero' es cero ";
}

// elseif se utiliza para agregar otra condicion
// se puede utilizar cuantos sean necesarios
// usulmente if es el caso mas repititivo o comun

?>