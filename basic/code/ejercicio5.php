<p>
  Ejercicio 5: Crea un array de la siguiente tabla:
  <ul>
    <li>Acción: GTA, COD, PUGB</li>
    <li>Aventura: Crash Bandicot, Assasins Creed, Prince of Persia</li>
    <li>Deportes: FIFA, NBA, MOTO GP</li>
  </ul>
</p>

<?php
  $tabla = [
    'Accion' => [
      'GTA',
      'COD',
      'PUGB'
    ],
    'Aventura' => [
      'Crash Bandicot',
      'Assasins Creed',
      'Prince of Persia'
    ],
    'Deportes' => [
      'FIFA',
      'NBA',
      'MOTO GP'
    ],
    'RPGS' => [
      'Final Fantasy',
      'D&D',
      'The Witcher',
      'WoW'
    ]
  ];
  
  function creaTabla($cantidad, $array){
    echo '<tr>';
      foreach($array as $key => $item){
        echo '<th>'.$key.'</th>';
    }
    echo '</tr>';

    for($x = 0; $x < $cantidad; $x++){
      echo '<tr>';
        for($i = 0; $i < count($array); $i++){
          echo '<td>'.$array[array_keys($array)[$i]][$x].'</td>';
        }
      echo '</tr>';
    }
  }
?>

<table border="1">
  <?= creaTabla(3, $tabla); ?>
</table>