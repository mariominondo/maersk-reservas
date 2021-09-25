<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    //conexion a servidor local 
    $usuario = "root";
    $clave = "Password123#@!"; 
    $servidor = "localhost";
    $base = "maersk";

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $conexion = new mysqli($servidor, $usuario, $clave, $base); 

    //validar conexion 
    if (!$conexion)
    {
        die("No se logro la conexión: " . mysqli_connect_error());
    }
    
?>