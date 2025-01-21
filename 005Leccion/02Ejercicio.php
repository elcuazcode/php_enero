<?php

// Calcular descuentos
// 1000 en adelante 20%
// 500 en adelante   10&
// Para el resto es un 5%

$cuanto_gasto = readline("Ingrese el monto gastado: ");



if ($cuanto_gasto >= 1000) {
  $total_final = $cuanto_gasto - ($cuanto_gasto * 0.2 );
  $descuento = "20%";
} elseif ($cuanto_gasto >= 500){
  $total_final = $cuanto_gasto - ($cuanto_gasto * 0.1);
  $descuento = "10%";
} else{
  $total_final = $cuanto_gasto - ($cuanto_gasto * 0.05);
  $descuento = "5%";
}

echo "Uste gasto  Q $cuanto_gasto y obtubo un descuente de $descuento total $total_final gastado";


?>