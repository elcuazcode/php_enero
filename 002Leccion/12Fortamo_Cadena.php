<?php

// Formato del texto
// Ejemplo para crear una fecha

$anio = "2025";
$mes = "05";
$dia = "09";
// Asi definimos el formato
$formato_elegido = "%s-%s-%s";


// Utilizamos la funcion, que necesita el formato como primer argumento
// luego en orden ingresamos los argumentos como queremos que el formato
// lo muestre
$creado = sprintf($formato_elegido, $dia, $mes, $anio);
echo $creado;

?>