<?php
    //parametros a configurar para la conxion de la base de datos 
    $host = "localhost";//sera el valor de nuestra BD
    $basededatos = "autos";//sera el valor de nuestra BD
    $usuariodb = "root";//sera el valor de nuestra BD
    $clavedb = "";//sera el valor de nuestra BD

    //lista de tablas
    $automovil = "automovil"; //tabla de usuarios

    //error_reporting(0);//no me muestra errores
    
    $conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);

    if ($conexion->connect_errno){
        echo "Nuestro sitio experimenta fallos....";
        exit();
    }

?>