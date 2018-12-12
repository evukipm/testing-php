<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Formulario</title>
</head>
<body>
  <form action="" method="post" name="datos_usuario" id="datos_usuario">
    <table width="15%" align="center">
      <tr>
        <td>Nombre:</td>
        <td><label for="nombre_usuario"></label>
        <input type="text" name="nombre_usuario" id="nombre_usuario"></td>
      </tr>
      <tr>
        <td>Edad:</td>
        <td><label for="edad_usuario"></label>
        <input type="text" name="edad_usuario" id="edad_usuario"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input type="submit" name="enviando" id="enviando" value="Enviar"></td>
      </tr>
    </table>
  </form>
  <?php

    if(isset($_POST["enviando"])){
      
      $usuario = $_POST["nombre_usuario"];
      $edad = intval($_POST["edad_usuario"]);
      
      if($usuario && $edad){
          echo "Bienvenido, $usuario. Veo que tienes $edad años.";
      }
      else{
          echo 'Completa los campos, por favor.';
      }
    }

  ?>
</body>
</html>