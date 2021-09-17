<?php

    //conexion a servidor local 
    $usuario = "root";
    $clave = ""; 
    $servidor = "localhost";
    $base = "maersk";

    $conexion = mysqli_connect($servidor,$usuario,$clave,$base); 

    //validar conexion 
    if (!$conexion)
    {
        die("No se logro la conexión");
    }
    
?>