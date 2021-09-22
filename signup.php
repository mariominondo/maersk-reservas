<?php
    require("conexion.php");

    global $conexion;
    $message = "";
    $message1 = "";
    $message2 = "";
    session_start();
    error_reporting(0);
    
    if (isset($_POST["btn"]))
    {
        echo"<script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $codigo = $_POST["codigo"];
        $contraseña = $_POST["contraseña"];
        $rol_nuevo = $_POST["rol"];
        $pais = $_POST['pais'];
               
      
?>
<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/asignar.css">
    <script src="https://kit.fontawesome.com/3fe7ff7174.js" crossorigin="anonymous"></script>
    <script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <link rel="shortcut icon" href="menu.jpg">

    <title>Login de la pagina</title>
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script>
        function generar()
        {
            var str = "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
            contraseña_cliente = "";
            for(i=0;i<8;i++) {
                contraseña_cliente += str[Math.floor(Math.random() * 36)];
            }
            document.getElementById("contraseña").value = contraseña_cliente;
      
        }
        function correcto()
        {
            Swal.fire({
            icon: 'success',
            title: 'Exito',
            text: 'Registro Existoso',
            })
        }
        function error()
        {
            Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'El codigo ya existe',
            })
        }
        function error1()
        {
            Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Solo es necesario un Asesor',
            })
        }
        function mostrar_aeropuerto(id)
        {
            var paises = ["México","Guatemala","Honduras","Panamá","Estados Unidos","China","Reyno Unido","Brasil"]
            var ids = ['MX','GUA','HND','PAN','USS','CHN','UK','USS','BRS']
            var pais = document.getElementById(id).value
            for (i=0;i<paises.length;i++)
            {
                if (paises[i] == pais)
                {
                    document.getElementById(ids[i]).style.display = "inline-block";
                    var select = document.getElementById(ids[i])
                    select.setAttribute("name","aeropuerto1");
                    document.getElementById('span').style.display = "inline-block";
                }
                else
                {
                    document.getElementById(ids[i]).style.display = "none";
                    var select = document.getElementById(ids[i])
                    select.setAttribute("name","aeropuerto");
                }
            }
        }
</script>
 
  </head>
  <?php 
  if ($message == "no")
  {
      ?><body onload="error()"><?php
          
  }
  else if ($message == "si")
  {
    ?><body onload="correcto()"><?php
  }
  else
  {
    ?><body><?php
  }
  ?>
  

    <nav class="nav justify-content-center">
        <a class="nav-link" href="indextrabajador.php"><i class="fas fa-home fa-2x"></i></a>
    </nav>
    <center>
    <section>
        <h1 style="margin:30px 0px;font-size:5vh">Creacion de Usuario para Clientes</h1>
            <?php 
                if(!empty($message2)) 
                {
                    ?><p style="color: red;font-size:15px;">Llene el formulario</p><?php
                }
            ?>
                <div class="row justify-content-center">
                    <div class="col-9" >
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Nombre:</span>
                            <input type="text" name="nombre" class="form-control"  aria-describedby="basic-addon1" required/>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-9" >
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Apellido:</span>
                            <input type="text" name="apellido" class="form-control"  aria-describedby="basic-addon1" required/>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-4" >
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1" >Codigo de Usuario:</span>
                            <input type="text" name="codigo" maxlength="4"   class="form-control"  aria-describedby="basic-addon1" required/>
                        </div>
                    </div>
                    <div class="col-4" >
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Contraseña: </span>
                            <input type="text" name="contraseña" id="contraseña" class="form-control"  aria-describedby="basic-addon1" required/>
                        </div>
                    </div>
                    <div class="col-1" >
                        <div class="input-group mb-3">
                            <button type="button" class="btn btn-secondary" style="width: 100%;font-size:11px" onclick="generar()">Generar</button>
                        </div>
                    </div>
                </div>
                <?php
                    if ($rol == "master")
                    {
                        ?>
                        <div class="row justify-content-center">
                            <div class="col-9" >
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Rol:</span>
                                    <select  id='origenselct' name="rol" class="form-select">
                                        <option>Asesor</option>
                                        <option>Administrador</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    else
                    {
                        ?>
                        <div class="row justify-content-center">
                            <div class="col-9" >
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Rol:</span>
                                    <select  id='origenselct' name="rol" class="form-select">
                                        <option>Administrador</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                
                ?>
                <?php 
                if(!empty($message1)) 
                {
                    ?><p style="color: red;font-size:15px;">En la empresa solo hay un Asesor</p><?php
                }?>
                <div class="row justify-content-center" style="margin-bottom: 20px;">
                    <div class="col-4">
                        <span  id="basic-addon1" >Pais: </span>
                        <select  id='pais' name='pais' class="form-select" onchange="mostrar_contenedor(this.id)" >
                            <option></option>
                            <option>México</option>
                            <option>Guatemala</option>
                            <option>Honduras</option>
                            <option>Panamá</option>
                            <option>China</option>
                            <option>Reyno Unido</option>
                            <option>Estados Unidos</option>
                            <option>Brasil</option>
                        </select>
                    </div>
                    <div class="col-4">
                        <span  id='span' id="basic-addon1"  style="display: none;">Puerto Origen:</span>
                        <select id='MX'  class="form-select"  style="display: none;">
                            <option></option>
                            <option>56899 – Puerto Manzanillo, Colima </option>
                        </select>
                        <select id='GUA'  class="form-select" " style="display: none;">
                            <option></option>
                            <option>25868 – Puerto Santo Tomas de Castilla</option>
                        </select>
                        <select id='HND'  class="form-select" " style="display: none;">
                            <option></option>
                            <option>78985 – Puerto San Lorenzo</option>
                        </select>
                        <select id='PAN'  class="form-select" " style="display: none;">
                            <option></option>
                            <option>98789 – Puerto de Balboa</option>
                        </select>
                        <select id='CHN'  class="form-select" " style="display: none;">
                            <option></option>
                            <option>23456 – Puerto de Qingdao</option>
                        <select id='UK'  class="form-select" " style="display: none;">
                            <option></option>
                            <option>23564 – Puerto Felixstowe, Suffolk</option>
                        </select>
                        <select id='USS'  class="form-select" " style="display: none;">
                            <option></option>
                            <option>98987 – Puerto Long Beach, Los Ángeles</option>
                        </select>
                        <select id='BRS'  class="form-select" " style="display: none;">
                            <option></option>
                            <option>15486 – Puerto de Santos</option>
                        </select>
                    </div>
                </div>
                
                <input type="submit" name="btn" class="btn btn-primary" value="Registrarse">
    </section>
    </center>
    
    <footer>
        <div class="foot-container">
            <a target="_BLANK" href="https://www.instagram.com/maersk_official/"><i class="fab fa-instagram fa-lg"></i></a>
            <br>
            <a class="logout" href="login.php">Log Out</a>
        </div>
    </footer>
  </body>
