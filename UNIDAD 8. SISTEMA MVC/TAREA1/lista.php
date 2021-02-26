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
            <h1>Lista de jugadores del equipo Los Ángeles Lakers</h1>
            <?php
                
                $nba = new db("localhost","pemidesan","S1nPerd0n","nba");

                if ($nba->conexion())
                {
                    $resultado = $nba->lectura_equipo("select * from nba.jugadores j where Nombre_equipo ='Lakers'");
                
                    echo "<table>";
                    echo $nba->pintaCabeceras();
                    echo $nba->pintaDatos();
                    echo "</table>";
                }
            ?>
        </main>
    </body>
</html>