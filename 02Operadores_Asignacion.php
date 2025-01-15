<?php

// operador de asignacion mas comun =
// operador de asignacion por referencia =&

$valor_original = 10;                 // este es el valor
$nuevo_valor = $valor_original;       // otra variable toma el valor
$valor_original = 50;                 // si cambio el valor original 
// la referencia no va a actualizarce
$nuevo_valor =& $valor_original;     // DEBO UTILIZAR ESTA SINTAXIS, PARA QUE PRIMERO EVALUE EL VALOR ORIGINAL
                                    // Y EL QUE HACE REFERENCIA A EL, TOME EL VALOR MAS ACTUALIZADO.  
echo $nuevo_valor;


// OPERADOR DE ASINACION CON CONCATENACION
// De esta manera podemos concatenar informacion a una variable
// Agregarle cuanto sea necesario

$nombre = "Juan ";
$nombre .="Pedro ";
$nombre .="Chamoro";
echo $nombre;
?>