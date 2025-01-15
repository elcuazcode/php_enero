<?php


// EVALUA SI DOS DATOS SON DIFERENTES
// Podemos utilizar != o <> ambos funcionan para ello.
// Este operador no evalua si tambien son diferentes tipos de datos
// para el un int y str son iguales de 10 == "10"
$edad = "10";
$edad_dos = 10;

var_dump($edad <> $edad_dos); // bool(false) solo evaluo el dato, mas no el tipo
var_dump($edad != $edad_dos); // por eso llega a la conclusion de que no son diferentes

// OPERADOR NO IDENTICO
// !== evalua si el dato y e tipo son diferente

var_dump($edad !== $edad_dos); // bool(true)
                                      // esto genera true porque tanto el dato como el tipo son diferentes.



?>