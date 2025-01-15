<?php


// Un empleado tiene un salario base. Calcular su nuevo salario si recibe un aumento del 10%

$salario_base = 1500;
$aumento = 0.1; // 10% en formato decimal

// $nuevo_salario = $salario_base + ($salario_base * $aumento);
$nuevo_salario = $salario_base * (1 + $aumento); // este forma genera el mismo resultado 
// que el codigo que tengo comentado.
echo "El nuevo salario es \${$nuevo_salario}";

?>