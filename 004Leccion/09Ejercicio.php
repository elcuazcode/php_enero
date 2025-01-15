<?php

// VERIFICAR SI ES MAYOR DE EDAD Y TIENE LICENCIA
// PARA DEJARLO PASAR, POLICILLA

$edad = 19;
$tiene_licencia = true;

// Aqui  pasa algo interesante, no necesito comparar
// la segunda condicion, asume que el valor que contenga sea true
// en numero seria 0 para false 1 true

if ($edad >= 18 && $tiene_licencia){
  echo "Pase rey, continue";
} else {
  echo "Negativo rey usted no cumple las condiciones ";
}



?>