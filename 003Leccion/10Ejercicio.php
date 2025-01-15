<?php

//  VALIDADR SI UNA CLAVE DE ACCESO TIENE 

$clave = readline("Ingrese una nueva clave: ");

if(strlen($clave) >= 8 && preg_match('/\d/', $clave)){
  echo "Clave aceptada";
} else {
  echo "No validad";
}

// condidcion && condicion, ambas deben ser verdaderas para que pase la prueba
// strlen($string) cuanta la cantidad de caracteres dentro del string
// preg_match('patron', 'cadena a evaluar') busca un patron 
// usando expreciones regulares.  Regresa 1 si encuentra un nunero
// Regresa 0 si no encuentra numero. 


?>