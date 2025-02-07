<?php

// FUNCIONES QUE DEVUELVEN MAS DE UN VALOR
// utilizando arrays

// devolver el area y perimetro de un rectangulo

function calcularRectangulo($base, $altura){
  $area = $base * $altura;
  $perimetro = 2 * ($base + $altura);
  return [$area, $perimetro]; // la funcion devuelve un array
}


// list permite obtener los valores separados
// en el orden en que viene el array
// al primer valor del array se le asigna $area
// al segundo valor del array se le asigna $perimetro
// y asi sucesivamente si hubieran mas
list($area, $perimetro) = calcularRectangulo(4,5);


echo "el area del rectangulo es $area y su perimetro $perimetro ";


?>