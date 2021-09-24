<?php
    require("conexion.php");

    // global $conexion;
    $message = "";
    $message1 = "";
    $message2 = "";
    session_start();
    
    
    if (isset($_POST["btn"]))
    {
        echo"<script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $codigo = $_POST["codigo"];
        $contraseña = $_POST["contraseña"];
        $rol_nuevo = $_POST["rol"];
        $pais = $_POST['pais'];
    }      
      
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
                <form class="form-signup">
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
                    
                    <input type="submit" name="btn" class="btn btn-primary" value="Registrarse">
                </form>
            </section>
        </center>
    </body>
    </html>
    