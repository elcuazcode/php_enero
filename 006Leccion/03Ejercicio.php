<?php

function encontrarNumeroPrimos($limite){
  echo "Numero primos hasta el $limite:\n ";

  for ($numero = 2; $numero <= $limite; $numero++){
    $esPrimo =  true;

    // Verificar si es primo
    for ($divisor = 2; $divisor <= sqrt($numero); $divisor++){
      if($numero % $divisor == 0){
        $esPrimo = false;
        break;
      }
    }

    // Imprimir si es primo

    if ($esPrimo){
      echo "$numero\n";
    }
 

  }

}
encontrarNumeroPrimos(50);


?>