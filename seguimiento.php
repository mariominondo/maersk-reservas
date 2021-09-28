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

<h1>Seguimiento</h1>

En imagen<br />
1. Hora de salida del contenedor<br />
2. La ruta marítima trazada para el puerto origen <br />
3. La hora estimada de llegada al puerto destino.<br />
4. La página debe permitir realizar la búsqueda del contenedor aplicando diferentes filtros, ya que el usuario podría no tener a mano el código de contenedor específico.<br />
<br>
Google Maps API <br>
1. https://developers.google.com/maps/documentation/javascript/overview <br>
2. https://developers.google.com/maps/documentation/geocoding/overview<br>
<br>

<form action="" method="get">
    <label for="buscar-contenedor">Buscar Contenedor</label>
    <input type="text" name="buscar-contenedor" id="" placeholder="Buscar...">
    <button type="submit">Buscar</button>
</form>

<?php require 'partials/footer.php'; ?>