<p>
  Ejercicio 3: Hacer una función que compruebe si una variable está vacía y si está vacía, rellenarla con texto en minúsculas y mostrarlo en mayúsculas y negrita.
</p>

<?php

  $var = '';

  function vacia($variable){
    if(empty(trim($variable))){
      $texto = strtolower('texto de relleno');
      return '<strong>'.strtoupper($texto).'</strong>';
    }
  }

  echo vacia($var);

?>