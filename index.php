<?php
    require ("conexion.php");

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

  <?php require 'partials/header.php'; ?>
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
    
    <?php require 'partials/footer.php'; ?>