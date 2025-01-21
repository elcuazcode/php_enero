<?php

// Do While
// Validar Entrada de Usuario

$intentos = 0;
$clave_acceso = "1234";  // Clave para ingresar al sistema

do{
  $clave_ingresada = readline("Ingrese clave "); // ingreso de clave del usuario
  $intentos++;
  if ($intentos == 4){
    echo "Cuanta bloqueda";
    break;
  }
} while($clave_ingresada != $clave_acceso );


// basicamente el codigo hace
// acepta la clave
// le suma 1 a la variable intentos
// si intentos no es 4, no muestra nada
// vuelve a iniciar el proceso.
// Cuando intentos sean igual a 4, se rompe el proceso
// indicando clave erronea.



?>