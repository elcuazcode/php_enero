<?php

// ELIMINAR LA PRIMERA APARRICION DE UN ELEMENTO 
// DENTRO DE UN ARRAY

$frutas = ["Platano", "Banano", "Sandia", "Papaya", "Sandia"];
$eliminar = "Sandia";

// Devuleve el indice
// Ademas de un true si hay coincidencia
$indice = array_search($eliminar, $frutas);


if($indice !== false ){
  unset($frutas[$indice]);
  // CUANDO UTILIZO UNSET QUITA EL ELEMENTO Y SU INDEX
  // PASA DE 0 1 2 3 a
  // 0 1 3 elinina 
  $frutas = array_values($frutas);
}

print_r($frutas);







?>