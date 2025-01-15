<?php

$nombre = "Juan CarpioPM para conseguir un optima capacidad es necesario";

// Donde empieza, y cuantos caraceteres quiero es el siguinte numero
// puedo utilizar numero negativos -2 para conseguir el mismo resultado
$cut = substr($nombre, 5, 6);
echo $cut;

// BUSCAR UNA PALABRA, CONSIGUIENDO SU INDICE DENTRO DE LA CADENA   

$palabra = "optima";

$encontrar = strpos($nombre, $palabra);

echo $encontrar;
/////////////////////////////////////////////////////////////////////
<<<'OEM'
Lo que estoy haciendo es extaer un texto utilizando su indice
Utilizando una funcion para ubicar palabras utilizando su indice
Dentro de una funcion que utiliza el indice para extaer una palabra
Guardo en una variable y e imprimo.
Basicamente usamso la ubicacion inicial y final segun el indice para 
extraer una palabra e imprimirla
OEM;


$final_cut = substr($nombre, $encontrar, -9);
echo $final_cut;
// Eso es todo para la busqueda de palabras

?>