<?php


// FOREACH
// PROCESAR INFORMACION DE ESTUDIANTES



// Array Asociativo Multidimencional
// echo $estudiantes['Juan']['edad']." ".$estudiantes['Juan']['promedio'];
// Esta seria la forma en la que se puede a los datos dentro del array
$estudiantes = [
  'Juan' => ['edad' => 20, 'promedio' => 85],
  'Maria' => ['edad' => 22, 'promedio' => 92],
  'Pedro' => ['edad' => 21, 'promedio' => 78]
];

foreach($estudiantes as $nombre => $datos){
  echo "$nombre - EDAD: {$datos['edad']},";  // Imprimir nombre y edad
  echo "Promedio: {$datos['promedio']}\n";   // Imprimir el promedio
}                                            // Dar un salto de linea para que
                                             // Separa cada impresion.  





?>