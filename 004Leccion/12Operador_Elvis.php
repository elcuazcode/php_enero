<?php


// Un variable que no guarda un valor
$edad;  // Si solo utilizaramos un (01)  ?: esta variable dede tener null al menos
        // para que sea sustituido.


// evalua si la variable no guarda un valor
// le asigna uno por defecto
$permitido =($edad)??18;

echo $permitido;


?>