<?php

// calcular el are de un rectangulo base * altura
// donde la altura es 5 por defecto


// dentro de la definicion de la funcion
// los parametros pueden tener valores por defecto
function area($base, $altura=5){
  return $base * $altura;
}

// Utilizando el argumento por defecto
$calculoSinAltura = area(10);

// Ingresando el valor de ambos argumentos
$calculo = area(3, 10);

echo $calculoSinAltura;

?>