<?php

// Utilizar recursividad para determinar el factorial de un numero

function factorial($numero){
  if($numero == 1){
    return 1;
  }else{
    return $numero * factorial($numero - 1);
  }
}


$resultado = factorial(5);
echo $resultado;


?>

