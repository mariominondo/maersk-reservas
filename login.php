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
  <?php require 'partials/header.php'; ?>
    
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
        <?php require 'partials/footer.php'; ?>