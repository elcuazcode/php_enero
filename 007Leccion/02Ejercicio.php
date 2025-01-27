<?php

// AREGLOS ASOCIATIVOS

$informacion = [
  "nombre" => "Juan",
  "apellido" => "Chui",
  "edad" => "20"
];

//echo $informacion["apellido"];

// Aqui es donde mejor se puede utilizar el indice
// de un array asociativo
// acceder a su valor
foreach ($informacion as $key => $value) {

  echo $value."\n";
}


?>