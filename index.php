<?php require_once 'partials/header.php' ?>
<div>
<h1>Formularios</h1>

<?php
  if(isset($_GET['message'])){
    $message = $_GET['message'];
    echo "<p>$message</p>";
  }
?>

<form action="validacion.php" method="post">
  <label for="name">Nombre</label><br/>
  <input type="text" name="name" required="required" pattern="[A-Za-z]+" /><br/>
  <label for="surnames">Apellidos</label><br/>
  <input type="text" name="surnames" required="required" pattern="[A-Za-z]+"/><br/>
  <label for="age">Edad</label><br/>
  <input type="text" name="age" required="required" pattern="[0-9]+"/><br/>
  <label for="email">Email</label><br/>
  <input type="email" name="email" required="required"/><br/>
  <label for="password">Contraseña</label><br/>
  <input type="password" name="password" required="required"/><br/>
  <input type="submit" value="enviar" />
</form>
</div>

<?php require_once 'partials/footer.php' ?>