<?php
    include "dbV3.php";
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
            <h1>Desarrollo Entorno Servidor. Tarea 2. Unidad 8.</h1>
            <h2>Autor. Pedro Miguel Deseado Sandonís</h2>
        </header>
        <main>            
            <?php
                echo "<h1>Partidos jugados por ".$_POST['equipo']."</h1>";                
                $nba = new dbV3("localhost","pemidesan","S1nPerd0n","nba");

                if ($nba->conexion())
                {
                    $consulta = "select * from partidos where equipo_local='".$_POST["equipo_local"]."'";                    
                    $resultado = $nba->lectura($consulta);
                    echo "<h3> Número de Registros encontrados ".count($resultado)."</h3>";
                    echo "<table>";
                    echo $nba->pintaCabeceras();
                    echo $nba->pintaDatos();
                    echo "</table>";
                }
                $nba->cerrar();
            ?>

        </main>
    </body>
</html>