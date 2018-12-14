<p>
  Ejercicio 4: Crear un script que tenga 4 variables, una de tipo array, otra de tipo string, otra int, y otra boleana, y que imprima un mensaje según el tipo de variable que sea.
</p>
<?php

  $array = ['dato1', 'dato2', 'dato3'];
  $string = 'Algo de texto';
  $int = 5;
  $boolean = false;

  function verifica($variable){

    if(gettype($variable) === 'string'){
      return 'Soy un string';
    }
    elseif(gettype($variable) === 'integer'){
      return 'Soy un entero';
    }
    elseif(gettype($variable) === 'array'){
      return 'Soy un array';
    }
    elseif(gettype($variable) === 'boolean'){
      return 'Soy un boleano';
    }
    else{
      return 'Sácame de esta crisis existencial';
    }

  }

  echo verifica($array).'<br/>';
  echo verifica($string).'<br/>';
  echo verifica($int).'<br/>';
  echo verifica($boolean).'<br/>';

?>