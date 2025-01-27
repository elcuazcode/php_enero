<?php


// TABLAS DE MULTIPLICAR DEL 1 al 10
function mostrarTablasMultiplicar(){
  for ($tabla = 1; $tabla <= 10; $tabla++){
    echo "Tabla de multiplicar: {$tabla} \n";
    for ($multiplicador = 1; $multiplicador <= 10; $multiplicador++){
      $resultado = $tabla * $multiplicador;
      echo "$tabla x $multiplicador = $resultado\n ";
    }
    echo "\n";
  }

}

mostrarTablasMultiplicar();

?>