<?php


// CALCULADORA OPERACIONES BASICAS SUMA RESTA MULTIPLICACION DIVISION

$numero_primero = readline("Ingrese el primer numero: ");
$numero_segundo = readline("Ingrese el segundo numero: ");

$suma = $numero_primero + $numero_segundo;
$resta = $numero_primero - $numero_segundo;
$multiplicacion = $numero_primero * $numero_segundo;
$division = $numero_primero / $numero_segundo;

echo "Suma ".$suma."\n";
echo "Resta ".$resta."\n";
echo "Multiplicacion ".$multiplicacion."\n";
echo "Division ".$division."\n";

?>