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