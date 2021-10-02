<?php
  require 'conexion.php';

  $message = '';

  if (isset($_POST['registrar'])) {
    $sql = "INSERT INTO usuarios (codigo, password, nombre, apellido, rol, pais, puerto) VALUES (?, ?, ?, ?, ?, ?, ?);";
    $stmt = $conexion->prepare($sql);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bind_param('sssssss', $_POST['codigo'], $password, $_POST['nombre'], $_POST['apellido'], $_POST['rol'], $_POST['pais'], $_POST['puerto']);

    if ($stmt->execute()) {
      $message = 'Usuario creado satisfactoriamente';
    } else {
      $message = 'Lo siento, debe existir un problema para crear esta cuenta';
    }
  } else {
    $message = 'Debes escribir un usuario y contraseña';
  }
?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="css/styles.css">
      <title>SignUp</title>
    </head>
    <body>

    <h1>SignUp</h1>
    <p>Ya tienes una cuenta <a href="login.php" style="color:blue;text-decoration:underline;">pulsa aqui</a></p> 

    <div class="container">
      <div class="row">
        <div class="col-sm">
        </div>
        <div class="col-sm">
          <form action="signup2.php" method="POST">
            <div class="form-group">
              <input type="text" name="codigo" class="form-control" id="codigo" aria-describedby="codigo" placeholder="Ingresa el código de usuario" required>
              <small id="codigo" class="form-text text-muted">We'll never share your code with anyone else.</small>
            </div>
            <div class="form-group">
              <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
            </div>

            <div class="form-group">
              <input type="text" name="nombre" class="form-control" id="nombre" aria-describedby="nombre" placeholder="Nombre del Colaborador" required>
            </div>

            <div class="form-group">
              <input type="text" name="apellido" class="form-control" id="apellido" aria-describedby="apellido" placeholder="Apellido del Colaborador" required>
            </div>

            <div class="form-group">
              <input type="text" name="rol" class="form-control" id="rol-de-usuario" aria-describedby="rolDeUsuario" placeholder="Rol del Usuario" required>
            </div>

            <div class="form-group">
              <input type="text" name="pais" class="form-control" id="pais" aria-describedby="pais" placeholder="País" required>
            </div>

            <div class="form-group">
              <input type="text" name="puerto" class="form-control" id="puerto" aria-describedby="puerto" placeholder="Puerto" required>
            </div>
            
            <button type="submit" name="registrar" class="btn btn-primary">Registrar</button>
          </form>
        </div>
        <div class="col-sm">
        </div>
      </div>
    </div>

  </body>
</html>
