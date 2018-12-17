<p>
  Ejercicio 2: Crear una función con php que añada valores a un array mientras que su longitud sea menor a 120 y luego mostrarlo por pantalla.
</p>

<?php

  function añadir(){
    $coleccion = [];
    for($i = 1; $i < 121;$i++){
      array_push($coleccion, "valor-$i");
    }
    return $coleccion;
  }

  $coleccion = añadir();
  echo 'La longitud del array es: '.count($coleccion).'<br/>';

  foreach($coleccion as $item){
    echo $item.', ';
  }

?>