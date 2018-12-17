<?php
$error = 'faltan valores';
  if(!empty($_POST['name']) && !empty($_POST['surnames']) && !empty($_POST['age']) && !empty($_POST['email']) && !empty($_POST['password'])){
    $name = $_POST['name'];
    $surnames = $_POST['surnames'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(!is_string($name) || preg_match('/[0-9]+/', $name)){
      $error = 'Hay un error en el nombre';
      header("Location:index.php?message=$error");
    }
    if(!is_string($surnames) || preg_match('/[0-9]+/', $surnames)){
      $error = 'Hay un error en el apellido';
      header("Location:index.php?message=$error");
    }
    if(!is_int($age) || !filter_var($age, FILTER_VALIDATE_INT)){
      $error = 'Hay un error en la edad';
      header("Location:index.php?message=$error");
    }
    if(!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
      $error = 'Hay un error en el email';
      header("Location:index.php?message=$error");
    }
    if(!is_string($password) || strlen($password) < 5){
      $error = 'Hay un error en la contraseña';
      header("Location:index.php?message=$error");
    }
    $error = false;

  }else{
    
    $error = 'faltan valores';
    header("Location:index.php?message=$error");

  }

?>
<?php require_once 'partials/header.php' ?>

  <?php if($error === false): ?>
    <p><?=$name?></p>
    <p><?=$surnames?></p>
    <p><?=$age?></p>
    <p><?=$email?></p>
    <p><?=$password?></p>
  <?php endif; ?>

<?php require_once 'partials/footer.php' ?>