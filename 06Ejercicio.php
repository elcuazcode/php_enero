<?php

// Una funcion que dentro utilice un condicional
// para determinar si un numero es negativo


function par_impar($numero){
  if($numero % 2 == 0){
    return "ES PAR";
  }else{
    return "ES IMPAR";
  }

}

$pruba = par_impar(11);
echo $pruba;




?>