<?php

$bestias = [

  "Salvajes" => ["Perro", "Gato", "Garza"],
  "Domesticos" => ["Camello", "Elefante", "Raton"],
  "Casarama" =>["Caballo", "Aguila", "Cebra"]


];

foreach ($bestias as $index => $animales){
  foreach($animales as $animal){
    echo $index." ".$animal." ";
  }
  echo "\n";
}

?>