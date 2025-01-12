<?php

// HEREDOC


$saludo ="Buenos dias ";
// Para herodoc no es necesario escapar los caracteres
// puedo utilizar comillas
$herodoc = <<<EOF
Todo es posible amigo
$saludo
Buenas tardes y adios.
EOF;

echo $herodoc;

$nowdoc = <<<'identificador'
No puedo agregar varibles
$saludo no lo reconoce
es mas simple, como una comilla simple
identificador;

echo $nowdoc;

?>