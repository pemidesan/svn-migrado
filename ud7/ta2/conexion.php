<?php

function conectarBBDD($servidor, $usuario, $password, $bbdd)
    {
        $conexion = new mysqli($servidor, $usuario, $password, $bbdd);
        $mensaje="";
        if ($conexion->connect_errno)
        {
            $mensaje ="Conexión fallida: ".$conexion->connect_errno.": ".$conexion->connect_error;
        }
        else
        {
            $mensaje="Conexión correcta";
        }
        return $mensaje;
    }

?>
