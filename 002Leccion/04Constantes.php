<?php

// Primera manera de crear una constante
const madre = "Mariana";


// Crear una constante utilizando una funcion
// Se vuelve una constante que puede ser accedida de manera global.
define("padre", "Chon");



$nombre_estudiante = "Jonny Ramon";

echo "Estudiante ".$nombre_estudiante." su madre es ".madre." su padre es ".padre;
echo " Estudiante ",$nombre_estudiante," su madre es ",madre," su padre es ",padre;
?>