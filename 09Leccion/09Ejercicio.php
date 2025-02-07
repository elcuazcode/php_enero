<?php

// Funcion anonima (closure)

// Una funcion guardad dentro de una variable
$duplicar = function($numero){
  return $numero * 2;
};

// Un areglo
$areglo= [1, 2, 3];
// Utilizamos esta funcion, que permite como parametros
// ingresar una funcion, y un areglo
// la funcion se va a plicar a cada uno de los elementos del array
$array_modificado = array_map($duplicar, $areglo);

print_r($array_modificado);



?>