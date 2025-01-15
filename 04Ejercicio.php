<?php

// OPERACIONES BASICAS UTILIZANDO SWTICH
// MANEJANDO EL CASO DE DIVISION 0

$numero_uno = 20;
$numero_dos = 30;
$operador = "/";

switch($operador){
  case "+":
  echo $numero_uno + $numero_dos;
  break;

  case "-":
  echo $numero_uno - $numero_dos;
  break;

  case "*":
  echo $numero_uno * $numero_dos;
  break;

  case "/":
  echo ($numero_dos != 0) ? $numero_uno / $numero_dos : "Error: Division por cero";
  // $numero_dos != 0   evalua si el numero dos es difetente a o
  // si es es diferente a 0 reliza $numero_uno / $numero_dos
  // si es falso, envia el mensaje de division por 0
  break;

  default:
  echo "Operacion Invalida";
}




?>