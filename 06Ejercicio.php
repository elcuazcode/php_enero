<?php

// CALCULAR CALIFICACION SEGUN PUNTUACION

$puntuacion = 34;

$calificacion = match(true){
  $puntuacion >= 90 => "A grande loco",
  $puntuacion >= 80 => "B",
  $puntuacion >= 70 => "C",
  $puntuacion >= 60 => "D",
  default => "F"
};

echo "La calificacion es $calificacion";

// este codigo puede ser sustituido por if elseif
// utilizar match es mas eficiente

?>