<?php

// BUSCAR UN ELEMENTO DENTRO DE UN
// ARRAY ASOCIATIVO

$persona = [
  "nombre" => "Juan",
  "edad" => 30,
  "ciudad" => "Barcelona",
];

$buscar = "edad";

// ESTA FUNCION INDICA SI UNA LLAVE SE ENCUENTRA DENTRO
// DE UN ARRAY, SU RESULTADO ES true o false
// funciona en asociativos, indexados y multidimencionales (de primer nivel)
if (array_key_exists($buscar, $persona)){
  echo "El valor de la clave '$buscar' es: ".$persona["edad"];
}else{
  echo "La clave '$buscar' no existe en el array ";
}



?>