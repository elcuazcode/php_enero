<?php

// Si compran mas de 5 productos, obtienen un 10% de descuento
// Para el resto de casos, pagan el mismo precio. 

$cantidad_cosa = readline("Cuantos productos compro: ");
$valor_producto = readline("Valor de cada unidad de producto: ");
$descuento = 0.9;
$total_final;



if ($cantidad_cosa > 5) {
  $total_final = (($cantidad_cosa * $valor_producto) * $descuento);
} else {
  $total_final = $cantidad_cosa * $valor_producto;
}

echo $total_final;


?>