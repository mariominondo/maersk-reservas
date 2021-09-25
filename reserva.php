<?php
session_start();
?>
<?php require 'partials/bootstrap_header.php';?>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/asignar.css">
    <script src="https://kit.fontawesome.com/3fe7ff7174.js" crossorigin="anonymous"></script>
    <script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>

    <h1 style="margin:30px 0px;font-size:5vh">Reserva de un contenedor</h1>

<form action="" method="post">

<div class="row justify-content-center" style="margin-top:20px;">
        <div class="col-4" >
                <label for="name">Nombre o Empresa:</label>
                <input type="text" name="nombre" style="display: block; width: 50   %;text-align: left;" class="form-control">
        </div>
    <div class="col-4">
        <label for="nit">NIT:</label>
        <input type="text" name="nit" id="" style="display: block; width: 50%;text-align: left;" class="form-control">
    </div>

    <div class="row justify-content-center" style="margin-top:20px;">
        <div class="col-4">
            <label for="direccion">Dirección:</label>
            <input type="text" name="direccion" id="" style="display: block; width: 100%;text-align: center;" class="form-control">
        </div>
    </div>
    <div class="row justify-content-center">

        <div class="col-5">
            <label for="puerto-origen" class=>Puerto de Origen:</label>
            <input type="text" name="puerto-origen" class="form-select" id="" list="puerto-origen" style="width:80%;">
                <datalist id="puerto-origen">
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
            <label for="pais-origen" class="form-label">País de Origen:</label>
            <input type="" name="pais-origen" id="" list="pais-origen" class="form-select" style="width:80%;">
                <datalist id="pais-origen">
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
                <label for="puerto-destino" class="form-label">Puerto de Destino:</label>
                <input type="text" name="puerto-destino" id="" list="puerto-destino" class="form-select" style="width:80%;">
                <datalist id="puerto-destino">
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
                <label for="pais-destino" class="form-label">País de Destino:</label>
                <input type="" name="pais-destino" id="" list="pais-destino" class="form-select" style="width:80%;">
                    <datalist id="pais-destino">
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



        <div class="row justify-content-center">
            <div class="col-6">
            <label for="receptor-de-carga class="form-label">Receptor de Carga:</label>
            <input type="text" name="receptor-de-carga" id="" style="display: block; width: 100%;text-align: center;"class="form-control">
        </div>
        <div class="row justify-content-center">
            <div class="col-6">
            <label for="contrasena-de-recepcion" class="form-label">Contraseña de Recepción:</label>
            <input type="text" name="contrasena-de-recepcion" id="" readonly style="display: block; width: 100%;text-align: center;"class="form-control">
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-6">
            <label for="tipo-de-carga" class="form-label">Tipo de Carga:</label>
            <input type="" name="tipo-de-carga" id="" list="tipo-de-carga" class="form-select">
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
        <div class="row justify-content-center" >
            <div class="col-6"
            <label for="descripcion-de-la-carga" class="form-label">Descripción de la Carga:</label>
            <input type="text" name="descripcion-de-la-carga" id="" style="display: block; width: 100%;text-align: center;"class="form-control">
            </div>
        </div>

    <div class="row justify-content-center" >
            <div class="col-3">
                <label for="peso-de-carga" class="form-label">Peso de Carga:</label>
                <input type="text" name="peso-de-carga" id="" style="display: block; width: 100%;text-align: left;" class="form-control"> Kg
            </div>


        <div class="col-3">
            <label for="valor-de-la-carga class="form-label">Valor de la Carga:</label>
            <input type="text" style="width :50%;" name="valor-de-la-carga" id="" list="valor-de-la-carga" class="form-select">
                <datalist id="valor-de-la-carga">
                    <option value="$1,000">
                    <option value="$2,000">
                    <option value="$3,000">
                    <option value="$4,000">
                    <option value="$5,000">
                </datalist>
        </div>
    </div>
        <div class="row justify-content-center" >
            <div class="col-6">
                <label for="tipo-de-contenedor" class="form-label">Tipo de Contenedor:</label>
                <input type="text" name="tipo-de-contenedor" id="" list="tipo-de-contenedor" class="form-select" style="width:80%">
                <datalist id="tipo-de-contenedor">
                    <option value="DRVA -Dry Van o contenedor seco - $200 x tonelada">
                    <option value="REFRR -Reefero contenedor refrigerado - $300 x tonelada">
                    <option value="OTSUP -Open Top o apertura superior - $260 x tonelada">
                    <option value="OSSI -Open Side o apertura lateral - $260 x tonelada">
                    <option value="TKCS -Tank o contenedor cisterna - $400 x tonelada">
                </datalist>
            </div>

        <div class="row justify-content-center" >
            <div class="col-6">
                <label for="codigo-de-contenedor" class="form-label">Código de Contenedor:</label>
                <input type="text" name="codigo-de-contenedor" id="" readonly class="form-control" style="width:60%;">
            </div>
        </div>
            <div class="col-2">
                <button type="submit" class="btn btn-outline-dark" style="margin-top:30px;">Reservar</button>
            </div>


</form>

<?php require 'partials/footer.php';?>