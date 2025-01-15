<?php


// Operadores de comparacion 
// true or false respuestas buleanas

// Operadores de comparacion 
// Igual ==

$nacionalidad = "Chilero";
$nacionalidad_dos = "Argentino";

var_dump( $nacionalidad == $nacionalidad_dos ); // bool(false)

$edad = 10;
$edad_dos = "10";

var_dump( $edad == $edad_dos ); // bool(true) los dos son 10, pero de diferente tipo

// UTILIZANDO EL OPERADOR IDENTICO == 
// este operador evalua si tambien son el mismo tipo de dato
var_dump( $edad === $edad_dos ); // bool(false) ambos son 10, pero de diferente tipo, este 
                                        // operador evalua esa parte.




?>