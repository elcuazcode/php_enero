<?php

// Imprimir la tabla de multiplicar de un numero
// UTILIZANDO FOR

echo "Imprime las tabla de multiplicar "."\n";
$numero = readline("Escoge un numero: ");

// Donde empieza
// condicion de donde termina
// como avanza como tercer argumento.
for($i = 1; $i <= 10; $i++){
  echo "$i * $numero = ".($numero * $i)."\n";
}



?>