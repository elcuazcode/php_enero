<?php

// OBTENER EL ESTADO DE UN PEDIDO
// match es mas preciso que swtich
// Entrega un valor directamente.

$estado= 10;

$mensaje = match($estado){
  1 => "Pendiente",
  2 => "En proceso",
  3 => "Completado",
  default => "Estado desconocido"
};

echo $mensaje;


//  match hace mas simple la situacion donde una variable
// tiene un numero de casos y como debe de actuar.
// PREGUNTA PUEDO PONER UNA FUNCION, PARA QUE EJECUTE ALGO 
// COMO RESULTADO DE UN estado

?>