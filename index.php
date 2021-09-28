<?php
session_start();

require "conexion.php";

if (!isset($_SESSION['codigo'])) {
    header('Location: /maersk-reservas/login.php');
}

$codigo = $_SESSION['codigo'];
// $nombre = $_SESSION['nombre'];
// $apellido = $_SESSION['apellido'];
// $rol = $_SESSION['rol'];

require 'partials/bootstrap_header.php';
?>
  
<?php
  // GET USER INFO
  $sql = "SELECT nombre, apellido, rol FROM usuarios WHERE codigo = '$codigo' ";
  $result = $conexion->query($sql); 

  $row = $result->fetch_row();

  if($row) {
    // echo var_dump($row);
    // Devuelve: array(3) { [0]=> string(7) "Rodrigo" [1]=> string(6) "Aldana" [2]=> string(13) "Administrador" }

    $nombre = $row[0];
    $apellido = $row[1];
    $rol = $row[2];
  }
?>

<div class="barra-nav__datos-usuario">
    <ul>
        <li>Código: <?php echo $codigo; ?> </li>
        <li>Nombre: <?php echo $nombre . " " . $apellido; ?></li>
        <li>Rol: <?php echo $rol; ?> </li>
    </ul>
</div>


  <section>
      <div class="container div1">
        <div class="row">
          <div class="col-6">
          <b class="p_quees">Que es Maersk?</b>
           <p class="p_quees">A.P. Moller - Maersk es una empresa de logística de contenedores integrada y pertenece a A. P. Moller Group. Conectamos y simplificamos el comercio para ayudar a nuestros clientes a crecer y prosperar. Con un equipo dedicado de más de 80.000 personas que operan en 130 países, nos esforzamos al máximo para favorecer el comercio global en un mundo en crecimiento.</p>
          </div>
          <div class="col-6 div2">
            <center>
            <img class="vision" style="width: 30vw;" src="images/descarga.jpg">
          </center>
          </div>
        </div>
      </div>
      <div class="container div1">
        <div class="row">
          <div class="col-6 div2">
            <center>
              <img class="vision" style="width: 30vw;" src="images/barcos.jpg">
            </center>
          </div>
          <div class="col-6">
          <b class="b_mision">Misión</b>
            <p class="p_mision">Moller - Maersk, que tiene la misión de eliminar las barreras y reducir la complejidad del comercio internacional, donde los usuarios tienen acceso a presupuestos y reservas online instantáneas para sus rutas comerciales preferidas con solo pulsar un botón.</p>
          </div>
        </div>
      </div>
    </section>

<?php require 'partials/footer.php';?>