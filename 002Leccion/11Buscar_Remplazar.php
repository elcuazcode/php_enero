<?php

$Telefono = "34-45-89-70";
$buscar = "-";
$remplazar ="";

// La intencion de esta funcion es modificar una cadena 
// Elegimos lo que vamos a cambiar
// Por cual vamos a cambiarlo
// Utilizamos la funcion para ejecutar la moficacion sobre la cadena.
// RESULTADO 34458970 
$modificado = str_replace($buscar, $remplazar, $Telefono);
echo $modificado;




?>