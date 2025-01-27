<?php

// CONTAR LA FRECUENCIA QUE UN ELEMENTO APARECE

$frutas = ["Platano", "Banano", "Sandia", "Papaya", "Sandia"];

$frecuencia = array_count_values($frutas);


// IMPRIME EL ELEMENTO
// Y A LA PAR LA CANTIDAD DE VECES
// QUE APARECE EN EL ARRAY
print_r($frecuencia);

?>