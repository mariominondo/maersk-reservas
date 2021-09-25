<?php
  require "conexion.php";

  session_start();
  $message = "";

  if (isset($_POST["codigo"]) && isset($_POST["password"])){
    $codigo = $_POST["codigo"];
    $password = $_POST["password"];

    
    $sql = "SELECT codigo, password FROM usuarios WHERE codigo = '$codigo' ";
    $result = $conexion->query($sql); 

    $row = $result->fetch_row();

    // echo "password traido= " . $row[1];

    if(password_verify($password, $row[1])){
      $_SESSION['codigo'] = $row[0];
      header("Location: /maersk-reservas");
 
    } else {
      echo "password invalido";
    }
    
  
    // if(mysqli_num_rows($query) >  0)
    // {
    //   $_SESSION["mostrar"] = $mostrar;
    //   header("Location: index.php");
    // }
    // else
    // {
    //   $message = "Revise su codigo o contraseña";
    // }
  } else {
    $message = "Debes escribir un usuario y contraseña";
  }
?>
  

  <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3fe7ff7174.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
    <title>MAERSK Reservas | Login</title>
  </head>
  <body>
    
        <div class="m-0 vh-100 row justify-content-center align-items-center">
            <div class="col-4 p-5 text-center">
              <div class="text-center">
                <img style="width: 15vw;" src="images/logo.png">
              </div>
              <?php if(!empty($message)): ?>
                <p style="color:red;"><?= $message ?></p>
              <?php endif;?>
                <form action="login.php" method="POST" class="text-center"  >
                    <div class="mb-3">
                      <label for="codigo" class="form-label">Código</label> 
                      <input type="text" class="form-control" id="codigo" name="codigo" >
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary" id="btnlog" name="boton">Ingresar</button>
                    
                  </form>
                  <br><br><br><br>
                  <p>No tienes una cuenta <a href="signup2.php" style="color:blue;text-decoration:underline;">pulsa aquí</a></p> 

                 
            </div>
        </div>
    