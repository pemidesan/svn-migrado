<?php
    include "dbV2.php";
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Desarrollo Entorno Servidor. Tarea1. Unidad 8.</title>
        <style type="text/css">
            table {border-spacing:0; text-align: center;}
            tr, td, th {background-color:beige;border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;}           
        </style>
    </head>
    <body>
        <header>
            <h1>Desarrollo Entorno Servidor. Tarea 1. Unidad 8.</h1>
            <h2>Autor. Pedro Miguel Deseado Sandonís</h2>
        </header>
        <main>
            <h1>Lista de Actores Juego de Tronos</h1>
            <?php
                
                $juegoTronos = new dbV2("localhost","pemidesan","S1nPerd0n","gameofthrones");

                if ($juegoTronos->conexion())
                {
                    $resultado = $juegoTronos->lectura("select * from cast");
                    echo "<h3> Número de Registros encontrados ".count($resultado)."</h3>";
                    echo "<table>";
                    echo $juegoTronos->pintaCabeceras();
                    echo $juegoTronos->pintaDatos();
                    echo "</table>";
                }
            ?>
        </main>
    </body>
</html>