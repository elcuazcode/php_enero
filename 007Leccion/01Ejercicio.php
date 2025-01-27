<?php

// ARRAYS

$nombre = ["Juan", "Ramon", "Romelio", "Carlos"];

echo $nombre[3];

echo "\n";


// ITERAR SOBRE TODOS LOS DATOS DEL ARRAY
foreach($nombre as $main){
  echo $main."\n";
}

// ITERAR SOBRE LOS DATOS DEL ARRAY Y ADEMAS ACCEDER A SU INDICE
// $nombre as $index => $main, $index toma el valor de cada indice
foreach($nombre as $index => $main){
  echo $main.$index."\n";
}

?>