<?php require_once 'partials/header.php' ?>

<?php

$archivo = fopen('fichero.txt', 'r');

while(feof($archivo)){
  $contenido = fgets($archivo);
  echo $contenido.'<br/>';
}

//fwrite($archivo, "Soy un texto en PHP");

fclose($archivo);

?>

<div>
</div>

<?php require_once 'partials/footer.php' ?>