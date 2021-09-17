<?php
    include("conexion.php");

    global $conexion;

    session_start();

    $tabla = $_SESSION['mostrar'];
    $codigo = $tabla['codigo']; 
    $nombre = $tabla['nombre'];
    $apellido = $tabla['apellido'];
    $rol = $tabla['rol'];
    $_SESSION['roltrabajador'] = $rol;
    $_SESSION['bandera'] = true; 

    
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/principal.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3fe7ff7174.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../js/principal.js"></script>
    <link rel="shortcut icon" href="logo.png">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Página Principal Asesor</title>
    <script>
      function onload(){
          Swal.fire({
          icon: 'success',
          title: 'Exito',
          text: 'Se logro logear exitosamente',
        })
      }
      
      function preguntar(link)
      {
        Swal.fire({
        title: 'Esta seguro?',
        text: "Se cerrará la sesión",
        icon: 'advertisment',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Cerrar sesión',
        cancelButtonColor: '#d33',
        
      }).then((result) => {
        if (result.isConfirmed) {
          
            window.location.href = link;

  }
})
      }
    </script>
  </head>
  <body onload="onload()">
    
    <!--Barra de navegacion -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
              <?php ?>
                  <a class="nav-link" style="color:white;">Código: <?= $codigo?></a>
                  <a class="nav-link" style="color:white;">Nombre: <?= $nombre," ", $apellido?></a>
                  <a class="nav-link" style="color:white;">Rol: <?= $rol?></a>
              </li>
              <?php ?>

          </ul>
      </div>

      <div class="navbar-collapse">
        <?php 
          if($rol=="cliente") 
          {
            ?>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item diferente"> 
                <a class="nav-link" href="verreserva.php">texto</a>
              </li>
            </ul>
            <?php
          }
          else
          {
            ?>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item diferente">
                  <a class="nav-link" href="reserva.php">Reservar</a>
              </li>
              <li class="nav-item diferente">
                  <a class="nav-link" href="#">texto</a>
              </li>

            <?php
            if ($rol == "supervisor")
            {
              ?>
                <li class="nav-item diferente">
                  <a class="nav-link" href="registrotrabajador.php">texto</a>
                </li>
              <?php
            }
            if ($rol == "master")
            {
              ?>
                <li class="nav-item diferente"> 
                  <a class="nav-link" href="registrotrabajador.php">texto</a>
                </li>
              </ul>
            <?php
            }
          }
          
        ?>
          
      </div>
  </nav>

    <header>

      <div class="contenedor-textos">
      </div>
      <div>
      <img class="logo" style="width: 30vw;"" src="logo.png">
        </div>
    </header>
    <section>
      <div class="container div1">
        <div class="row">
          <div class="col-6">
            <b class="p_quees">Que es Maersk?</b>
            <p class="p_quees">A.P. Moller - Maersk es una empresa de logística de contenedores integrada y pertenece a A. P. Moller Group. Conectamos y simplificamos el comercio para ayudar a nuestros clientes a crecer y prosperar. Con un equipo dedicado de más de 80.000 personas que operan en 130 países, nos esforzamos al máximo para favorecer el comercio global en un mundo en crecimiento.</p>
          </div>
          <div class="col-6 div2">
            <center>
          </center>
          </div>
        </div>
      </div>
    </section>
    <footer>
        <center>
        <div class="foot-container">
            <a target="_BLANK" href="https://www.instagram.com/maersk_official/"><i class="fab fa-instagram fa-lg"></i></a>
            <br>
             <a class="logout" onclick="preguntar('login.php')">Log Out</a>
        </div>
        </center>
    </footer>
</body>
</html>
