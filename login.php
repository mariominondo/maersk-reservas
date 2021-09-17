<?php

  include("conexion.php");

  global $conexion;

  $message = '';

  if (isset($_POST['boton'])){

    session_start();
    error_reporting(0);
    $codigo = $_POST["codigo"];
    $contra = $_POST["contra"];
  
  
    $query = mysqli_query($conexion,"SELECT * FROM usuarios WHERE codigo = '$codigo' AND contraseña = '$contra' "); 
    $mostrar =  mysqli_fetch_array($query);
    
  
  
    if(mysqli_num_rows($query) >  0)
    {
      $_SESSION['mostrar'] = $mostrar;
      header("Location: index1.php");
    }
    else
    {
      $message = "Revise su codigo o contraseña";
    }
  }

  
  
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
    <script type="text/javascript" src="../js/login.js"></script>
    <script src="https://kit.fontawesome.com/3fe7ff7174.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" style="width: 100%;" href="../Imagenes/Logo22.png">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Login</title>
  </head>
  <body>
    
        <div class="m-0 vh-100 row justify-content-center align-items-center">
            <div class="col-4 p-5 text-center">
              <div class="text-center">
                <img style="width: 15vw;" src="logo.png">
              </div>
              <?php if(!empty($message)): ?>
                <p style="color:red;"><?= $message ?></p>
              <?php endif;?>
                <form action="login.php" method="POST" class="text-center"  >
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Código</label> 
                      <input type="text" class="form-control" id="codigo" name="codigo" >
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" id="contra" name="contra">
                    </div>
                    <button type="submit" class="btn btn-primary" id="btnlog" name="boton">Ingresar</button>
                    
                  </form>
                  <p>No tienes una cuenta; <a href="indexclientes.php" style="color:blue;text-decoration:underline;">pulsa aqui</a></p> 

                 
            </div>
        </div>
        
  <footer>
     <div class="foot-container">
         <a target="_BLANK" href="https://www.instagram.com/maersk_official/"><i class="fab fa-instagram fa-lg"></i></a>
     </div>
  </footer>
</body>
</html>