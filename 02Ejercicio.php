<?php

function imprimirPiramide($altura){

  for($i = 1; $i <= $altura; $i++){

    // imprimir espacios
    for ($j = 1; $j <= $altura - $i; $j++){
      echo "+";
    }

    // IMPRIMIR ASTERISCOS
    // Esta formula genere una secuencia de numero impares, que crea el efecto visual de 
    // una piramide que crece simetricamente a ambos lagos
    for ($k =1; $k <= 2 * $i - 1; $k++){
      echo "*";
    }


    echo "\n";
  }


}

imprimirPiramide(5);

?>