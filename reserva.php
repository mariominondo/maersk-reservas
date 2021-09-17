<?php
    session_start();
?>
<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/3fe7ff7174.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../Imagenes/Logo22.png">
    <title>Comprar boletos</title>
    <script src="../js/jquery-3.6.0.min.js"></script>
    <style>
      *
      {
          margin:0; 
          padding: 0;
          box-sizing: border-box;
      }
      body
      {
          font-family: 'Arial';
          height: 150vh;
      }
      header
      {
          background-color: black;
      }

      h1{
          font-size: 45px;
          font-weight: 25px;
          margin-top: 20px;
          margin-bottom: 30px;
          text-align: center;
      }

      .card{
          margin: 30px;
          display: inline-block;
      }
      footer {
          position: relative;
          /* Altura total del footer en px con valor negativo */
          margin-top: -50px;
          /* Altura del footer en px. Se han restado los 5px del margen
            superior mas los 5px del margen inferior
          */
          height: 20%;
          padding:5px 0px;
          clear: both;
          background: black;
          text-align: center;
          color: #fff;
      }
      i{
          color: white;
          text-decoration: none;
          color :white;
          align-items: center;
          margin: 10px;
      }
      .foot-container{
          align-items: center;
          text-align: center;
          margin-top: 15px;

      }
      a:hover
      {
          cursor:pointer;
      }
</style>
  <body>
    <header>
    </header>
    <section>
       
    </section>
    
    <footer>
      <div class="foot-container">
          <a target="_BLANK" href="https://www.instagram.com/maersk_official/"><i class="fab fa-instagram fa-lg"></i></a>
          <br>
          <a class="logout" href="../php/login.php">Log Out</a>
      </div>
   </footer>

    
</body>
</html>
