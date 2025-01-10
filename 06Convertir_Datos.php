<?php

// php hace conversiones en automatico, en situaciones donde lo detecte

$numero_entero = 20;
$numero_cadena = "30";

$suma = $numero_entero + $numero_cadena;
echo $suma;


// En este caso la suma da como resultado un decimal
// pero podemos forzar la conversion del mismo
$numero_float = 10.5;
$suma = $numero_float + $numero_cadena;
echo intval($suma);


// Para convertirlo a tro tipos tenemos estas opciones, son funciones que nos permiten realizar
// estos procesos
// strval($suma);
// intval($suma);
// boolval($suma);

echo gettype(boolval($suma));
?>