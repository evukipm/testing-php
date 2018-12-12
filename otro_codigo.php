<?php

  $hola = "hola!";

  function dameDatos (){
    global $hola;
    $hola = "He cambiado el texto<br>";
    echo $hola;
  }

  function increment(){
    static $contador = 0;
    $contador++;
    echo "$contador <br>";
  }

  function compare(){
    $variable1 = "casa";
    $variable2 = "CASA";

    $resultado = strcasecmp($variable1, $variable2);

    if($resultado){
      echo "no coinciden";
    }else{
      echo "coinciden";
    }

    echo $resultado;
  }

?>