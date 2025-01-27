<?php

$animales = [

  ["Perro", "Gato", "Garza"],
  ["Camello", "Elefante", "Raton"],
  ["Caballo", "Aguila", "Cebra"]


];


$bestias = [

  "Salvajes" => ["Perro", "Gato", "Garza"],
  "Domesticos" => ["Camello", "Elefante", "Raton"],
  "Casarama" =>["Caballo", "Aguila", "Cebra"]


];

// ACCEDER A AGUILA
// FILA 2
// INDICE 1
// DE DESA MANERA ACCEDEMOS
var_dump($animales[2][1])."\n";
var_dump($bestias["Domesticos"][1]);
?>