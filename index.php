<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP test</title>
</head>
<body>

  <?php

    print "<h1>Probando PHP</h1><br>"; //Comentario de una línea

    print "<p>Por primera vez</p>";

    /*  
      Comentario de
      varias líneas
    */

    include ("otro_codigo.php"); // se puede usar require, aunque es más restrictivo y si no encuentra el archivo detiene la ejecución
    
    dameDatos();

    echo "Qué hace";

  ?>

</body>
</html>