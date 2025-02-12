<?php

// VARIABLES GLOBALES Y LOCALES



$mensaje = "Juan Ramon";

function montrar_mensaje(){
  // Si no hago este proceso
  // la funcion no puede utilizar esta viable
  // declarada fuera de ella
  global $mensaje;
  echo $mensaje;
}

montrar_mensaje();


// UNA VARIABLE DENTRO DE UNA FUNCION
// NO SE PUEDE USAR EXTERNAMENTE
// SOLO PODEMOS COMO REGRESARLO COMO RESULTADO
// DE UNA FUNCION

?>