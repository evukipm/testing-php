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
    ]
  ];

  print_r($tabla);

?>