<?php

// Mayor que >
// Mayor o igual que >=
// Menor que <
// Menor o igual que <=

$edad_minima = 18;

// Si la edad minima se cumple, 19 es mayor que 18
var_dump($edad_minima < 19); 
var_dump($edad_minima < 18); // en este caso no es mayor, es igual 
                                    // a la edad minima
// PARA RESOLVER ESTE CASO TENEMOS >= Y <=


// PARA AMBOS CASOS ES TRUE
var_dump($edad_minima <= 18); // 18 ES MENOR O IGUAL QUE 18 
var_dump($edad_minima >= 18); // 18 ES MAYOR O IGUAL QUE 18





?>