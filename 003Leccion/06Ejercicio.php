<?php

// SABER SI PUEDE INGRESAR BASADO EN SU EDAD.

$edad = readline("Ingrese su edad: ");

if ($edad >= 18){
  echo "Bienvenido";
} else {
  echo "No cumples con la edad minima";
}


?>