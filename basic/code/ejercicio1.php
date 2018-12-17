<p>
  Ejercicio 1: Crear un array con 8 números enteros que haga lo siguiente:
  <ul>
    <li>Recorrerlo y mostrarlo</li>
    <li>Ordenarlo y mostrarlo</li>
    <li>Mostrar su longitud</li>
    <li>Buscar algún elemento</li>
  </ul>
</p>

<?php $numeros = [1,7,2,8,3,6,4,0]; ?>

<div>
  <h2>Recorrerlo y mostrarlo</h2>
  <ul>
    <?php
      foreach($numeros as $numero){
        echo '<li>'.$numero.'</li>';
      }
    ?>
  </ul>
</div>

<div>
  <h2>Ordenarlo y mostrarlo</h2>
  <ul>
    <?php
      asort($numeros);
      foreach($numeros as $numero){
        echo '<li>'.$numero.'</li>';
      }
    ?>
  </ul>
</div>

<div>
  <h2>Mostrar su longitud</h2>
    <p><?= 'Su longitud es: '.count($numeros); ?></p>
</div>

<div>
  <h2>Buscar algún elemento</h2>
    <?php
    $existe = in_array(8, $numeros);
    if($existe){
      $indice = array_search(8, $numeros);
      echo 'El número 8 está en el índice: '.$indice;
    }else{
      echo 'El número buscado no existe';
    }
    ?>
</div>