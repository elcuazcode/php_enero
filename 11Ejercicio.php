<?php

// Una funcion  
// con condicionales
// que maneje excepciones


//  Aqui definimos un caso que va a resultar en error
function dividir($a, $b){
  if ($b == 0){
    throw new Exception("Division por cero");
  }
  return $a / $b;
}

// Aqui manejamos el error de manera elegante
// cuando suceda.
// Atrapar el error, almacenarlo en $e
// eso es un objeto
// por lo tanto podemos obtener una propiedad
// del mismo $e->getMesssage();

try {
  echo dividir(10,2)."\n"; 
  echo dividir(10, 0)."\n";
} catch (Exception $e) {
  echo "Error: " . $e->getMessage();
}






?>