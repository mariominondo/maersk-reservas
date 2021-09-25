<?php
  require 'conexion.php';

  $message = '';

  if (!empty($_POST['codigo']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO usuarios (codigo, password) VALUES (?, ?);";
    $stmt = $conexion->prepare($sql);
    // $stmt->bind_param('codigo', $_POST['codigo']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bind_param('ss', $_POST['codigo'], $password);

    if ($stmt->execute()) {
      $message = 'Usuario creado satisfactoriamente';
    } else {
      $message = 'Lo siento, debe existir un problema para crear tu cuenta';
    }
  } else {
    $message = 'Debes escribir un usuario y contraseña';
  }
?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>SignUp</h1>
    <p>Ya tienes una cuenta <a href="login.php" style="color:blue;text-decoration:underline;">pulsa aqui</a></p> 

    <form action="signup2.php" method="POST">
      <input name="codigo" type="text" placeholder="Ingresa tu código">
      <input name="password" type="password" placeholder="Ingresa tu Password">
      <input name="confirm_password" type="password" placeholder="Confirma tu Password">
      <input type="submit" value="Registrar">
    </form>

  </body>
</html>
