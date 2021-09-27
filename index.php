<?php
    require ("conexion.php");

    session_start();

    if (!isset($_SESSION['codigo'])) {
      header('Location: /maersk-reservas/login.php');
    }

    $codigo = $_SESSION['codigo']; 
    $nombre = $_SESSION['nombre'];
    $apellido = $_SESSION['apellido'];
    $rol = $_SESSION['rol'];

  require 'partials/header.php';
    
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

  require 'partials/footer.php'; 