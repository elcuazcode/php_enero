<?php


// Calcular el promedio de calificaciones de un Alumno

$calificaciones = [20, 30 , 40, 50];

$suma = 0;

foreach($calificaciones as $calificacion){
  $suma = $suma +  $calificacion;
}

$promedio = $suma / count($calificaciones);
echo "El promedio del estudiante Jony es ". number_format($promedio, 2);



// El mismo proceso se podria conseguir de una manera mas sencilla, sin embargo esto funciona.

?>