<?php
session_start();

require "conexion.php";

if (!isset($_SESSION['codigo'])) {
    header('Location: /maersk-reservas/login.php');
}

$message = "";

$codigo = $_SESSION['codigo'];

require 'partials/bootstrap_header.php';

// CREAR CONTRASENA
    function randomPassword() {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }
    $contrasena = randomPassword();
    $codigoContenedorUnico = randomPassword();

// GET USER INFO
$sql = "SELECT nombre, apellido, rol FROM usuarios WHERE codigo = '$codigo' ";
$result = $conexion->query($sql);

$row = $result->fetch_row();

if ($row) {
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

<h1 style="margin:30px 0px;font-size:5vh">Reserva de un contenedor</h1>
<?php if (!empty($message) && isset($_POST['submit-reservar'])): ?>
    <p style="color:red;"><?=$message?></p>
<?php endif;?>

<?php
if ($row[2] == "Administrador") {

    // Validación de datos solamente si es administrador
    if (isset($_POST['submit-reservar'])) {

        $empresa = $_POST["empresa"];
        $nit = $_POST["nit"];
        $direccion = $_POST["direccion"];
        $puerto_de_origen = $_POST["puerto-de-origen"];
        $pais_de_origen = $_POST["pais-de-origen"];
        $puerto_de_destino = $_POST["puerto-de-destino"];
        $pais_de_destino = $_POST["pais-de-destino"];
        $receptor_de_carga = $_POST["receptor-de-carga"];
        $contrasena_de_recepcion = $_POST["contrasena-de-recepcion"];
        $tipo_de_carga = $_POST["tipo-de-carga"];
        $descripcion_de_carga = $_POST["descripcion-de-carga"];
        $peso_de_carga = $_POST["peso-de-carga"];
        $valor_de_carga = $_POST["valor-de-carga"];
        $tipo_de_contenedor = $_POST["tipo-de-contenedor"];
        $codigo_de_contendedor = $_POST["codigo-de-contenedor"];

        $sql = "INSERT INTO reservas (empresa, nit, direccion, puerto_de_origen, pais_de_origen, puerto_de_destino, pais_de_destino, receptor_de_carga, contrasena_de_recepcion, tipo_de_carga, descripcion_de_carga, peso_de_carga, valor_de_carga, tipo_de_contenedor, codigo_de_contendedor) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $conexion->prepare($sql);
        $stmt->bind_param('sssssssssssddss', $empresa, $nit, $direccion, $puerto_de_origen, $pais_de_origen, $puerto_de_destino, $pais_de_destino, $receptor_de_carga, $contrasena_de_recepcion, $tipo_de_carga, $descripcion_de_carga, $peso_de_carga, $valor_de_carga, $tipo_de_contenedor, $codigo_de_contendedor);

        if ($stmt->execute()) {
            $message = 'Reserva creada satisfactoriamente!';
        } else {
            $message = 'Lo siento, debe existir un problema para crear tu reserva';
        }

    } else {
        $message = "¡Todos son requeridos!";
    }
?>



<form action="reserva.php" method="post">
    <div class="row justify-content-center" style="margin-top:20px;">
        <div class="col-4">
            <label for="name">Nombre o Empresa:</label>
            <input type="text" name="empresa" style="display: block; width: 50%; text-align: left;" class="form-control" required>
        </div>
        <div class="col-4">
            <label for="nit">NIT:</label>
            <input type="text" name="nit"  style="display: block; width: 50%;text-align: left;" class="form-control" required>
        </div>

        <div class="row justify-content-center" style="margin-top:20px;">
            <div class="col-4">
                <label for="direccion">Dirección:</label>
                <input type="text" name="direccion"  style="display: block; width: 100%;text-align: center;" class="form-control" required>
            </div>
        </div>
        <div class="row justify-content-center">

            <div class="col-5">
                <label for="puerto-de-origen" class="puerto-de-origen">Puerto de Origen:</label>
                <input type="text" name="puerto-de-origen" class="form-select"  list="puerto-de-origen" style="width:80%;" required>
                <datalist id="puerto-de-origen">
                    <option value="25868 –Puerto Santo Tomas de Castilla –Guatemala">
                    <option value="56899 –Puerto Manzanillo, Colima –México">
                    <option value="78985 –Puerto San Lorenzo –Honduras">
                    <option value="98789 –Puerto de Balboa –Panamá">
                    <option value="23456 –Puerto de Qingdao –China">
                    <option value="23564 –Puerto Felixstowe, Suffolk –Reino Unido">
                    <option value="98987 –Puerto Long Beach, Los Ángeles –Estados Unidos">
                    <option value="15486 –Puerto de Santos –Brasil">
                </datalist>
            </div>
            <div class="col-5">
                <label for="pais-de-origen" class="form-label">País de Origen:</label>
                <input type="text" name="pais-de-origen"  list="pais-de-origen" class="form-select" style="width:80%;" required>
                <datalist id="pais-de-origen">
                    <option value="GUA –Guatemala">
                    <option value="MX –México">
                    <option value="HND –Honduras">
                    <option value="PAN –Panamá">
                    <option value="CHN –China">
                    <option value="UK –Reyno Unido">
                    <option value="USS –Estados Unidos">
                    <option value="BRS –Brasil">
                </datalist>
            </div>
            <div class="row justify-content-center">
                <div class="col-5">
                    <label for="puerto-de-destino" class="form-label">Puerto de Destino:</label>
                    <input type="text" name="puerto-de-destino"  list="puerto-de-destino" class="form-select" style="width:80%;" required>
                    <datalist id="puerto-de-destino">
                        <option value="25868 –Puerto Santo Tomas de Castilla –Guatemala">
                        <option value="56899 –Puerto Manzanillo, Colima –México">
                        <option value="78985 –Puerto San Lorenzo –Honduras">
                        <option value="98789 –Puerto de Balboa –Panamá">
                        <option value="23456 –Puerto de Qingdao –China">
                        <option value="23564 –Puerto Felixstowe, Suffolk –Reino Unido">
                        <option value="98987 –Puerto Long Beach, Los Ángeles –Estados Unidos">
                        <option value="15486 –Puerto de Santos –Brasil">
                    </datalist>
                </div>
                <div class="col-5">
                    <label for="pais-de-destino" class="form-label">País de Destino:</label>
                    <input type="text" name="pais-de-destino"  list="pais-de-destino" class="form-select" style="width:80%;" required>
                    <datalist id="pais-de-destino">
                        <option value="GUA –Guatemala">
                        <option value="MX –México">
                        <option value="HND –Honduras">
                        <option value="PAN –Panamá">
                        <option value="CHN –China">
                        <option value="UK –Reyno Unido">
                        <option value="USS –Estados Unidos">
                        <option value="BRS –Brasil">
                    </datalist>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-6">
                <label for="receptor-de-carga" class="form-label">Receptor de Carga:</label>
                <input type="text" name="receptor-de-carga"  style="display: block; width: 100%;text-align: center;" class="form-control" required>
            </div>
            <div class="row justify-content-center">
                <div class="col-6">
                    <label for="contrasena-de-recepcion" class="form-label">Contraseña de Recepción:</label>
                    <input type="text" name="contrasena-de-recepcion"  readonly style="display: block; width: 100%;text-align: center;" class="form-control"  value="<?= $contrasena ?>" required>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-6">
                    <label for="tipo-de-carga" class="form-label">Tipo de Carga:</label>
                    <input type="text" name="tipo-de-carga"  list="tipo-de-carga" class="form-select" required>
                    <datalist id="tipo-de-carga">
                        <option value="Productos animales">
                        <option value="Cereales y otras preparaciones">
                        <option value="Textiles">
                        <option value="Prendas de Vestir">
                        <option value="Cueros, calzado, etc.">
                        <option value="Máquinas no eléctricas">
                        <option value="Máquinas eléctricas">
                        <option value="Material de transporte">
                        <option value="Manufacturas">
                        <option value="Salud y productos para el hogar">
                    </datalist>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-6">
                    <label for="descripcion-de-carga" class="form-label">Descripción de la Carga:</label>
                    <input type="text" name="descripcion-de-carga"  style="display: block; width: 100%; text-align: center;" class="form-control" required>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-3">
                    <label for="peso-de-carga" class="form-label">Peso de Carga (Kg):</label>
                    <input type="text" name="peso-de-carga"  style="display: block; width: 100%;text-align: left;" class="form-control" required>
                </div>


                <div class="col-3">
                    <label for="valor-de-carga" class="form-label">Valor de la Carga:</label>
                    <!-- <input type="text" style="width: 50%;" name="valor-de-carga"  list="valor-de-carga" class="form-select" required> -->
                    <select id="valor-de-carga" name="valor-de-carga">
                        <option value="1000">$1,000</option>
                        <option value="2000">$2,000</option>
                        <option value="3000">$3,000</option>
                        <option value="4000">$4,000</option>
                        <option value="5000">$5,000</option>
                    </select>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-6">
                    <label for="tipo-de-contenedor" class="form-label">Tipo de Contenedor:</label>
                    <input type="text" name="tipo-de-contenedor"  list="tipo-de-contenedor" class="form-select" style="width:80%" required>
                    <datalist id="tipo-de-contenedor">
                        <option value="DRVA -Dry Van o contenedor seco - $200 x tonelada">
                        <option value="REFRR -Reefero contenedor refrigerado - $300 x tonelada">
                        <option value="OTSUP -Open Top o apertura superior - $260 x tonelada">
                        <option value="OSSI -Open Side o apertura lateral - $260 x tonelada">
                        <option value="TKCS -Tank o contenedor cisterna - $400 x tonelada">
                    </datalist>
                </div>

                <div class="row justify-content-center">
                    <div class="col-6">
                        <label for="codigo-de-contenedor" class="form-label">Código de Contenedor:</label>
                        <input type="text" name="codigo-de-contenedor"  readonly class="form-control" style="width:60%;" value="<?= $codigoContenedorUnico ?>" required>
                    </div>
                </div>
                <div class="col-2">
                    <button type="submit" class="btn btn-outline-dark" style="margin-top:30px;" name="submit-reservar">Reservar</button>
                </div>
            </div>
        </div>  
    </div>
</form>

<?php

} else {
    $message = "Debes ser Administrador para crear una reserva.";
}
?>

<?php require 'partials/footer.php';?>