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

<h1>Reporte de Facturación</h1>
<h4>Buscar Código de Contenedor</h4>

<form action="" method="post" class="form-codigo-buscar-contenedor">
  <label for="codigo-de-contenedor">Código de contenedor:
    <input type="text" name="codigo-de-contenedor" id="">
  </label>
  <button>Mostrar Detalle</button>
  
</form>

<div class="detalles">
  <table class="tabla-detalles">
    <th class="tabla-detalles__encabezado">
      <tr>
        <td>Tipo de rubro</td>
        <td>Valor</td>
      </tr>
    </th>
    <tbody class="tabla-detalles__body">
      <tr>
        <td>Flete marítimo internacional</td>
        <td class="valor-flete-maritimo-internacional">29 toneladas x el precio del contendor</td>
      </tr>
      <tr>
        <td>Desplazamiento del contenedor</td>
        <td class="valor-desplazamiento-del-contenedor"> $150 puertos origen o destino (tarifa única)</td>
      </tr>
      <tr>
        <td>BAF - Recargo de Combustible</td>
        <td class="valor-baf-recargo-de-combustible">$100 (tarifa única)</td>
      </tr>
      <tr>
        <td>CAF - Ajustes tipo de Cambio</td>
        <td class="valor-car-ajustes-de-cambio">$100 (tarifa única)</td>
      <tr>
        <td>BL - Gastos de Documentación</td>
        <td class="valor-bl-gastos-de-documentacion">$300 (tarifa única)</td>
      <tr>
        <td>T3 - Tasas Portuarias</td>
        <td class="valor-t3-tasas-porturarias">$300 (tarifa única)</td>
      <tr>
        <td>Total</td>
        <td class="valor-total">Suma de todos los incisos</td>
      </tr>
    </tbody>
  </table>
</div>

<?php require 'partials/footer.php'; ?>