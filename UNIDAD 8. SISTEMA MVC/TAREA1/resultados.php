<?php
    include "db.php";
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

    <head>
        <h1>Desarrollo Entorno Servidor. Tarea 1. Unidad 8.</h1>
        <h2>Autor. Pedro Miguel Deseado Sandonís</h2>
    </head>
    <main>
        <h1>Resultados del equipo Los Ángeles Lakers</h1>
        <?php
            $nba = new db("localhost","pemidesan","S1nPerd0n","nba");

            if ($nba->conexion())
            {
                $resultado = $nba->lectura_equipo("select * from nba.partidos where equipo_local ='Lakers' or equipo_visitante ='Lakers'");

                //$cabecera = $resultado->getClaves();
                echo "<h3> Registros encontrados: ".$resultado->num_rows."</h3>";
                echo "<table>";
                echo "<tr><th>Codigo</th><th>Equipo Local</th><th>Equipo Visitante</th><th>Puntos Local/th>
                          <th>Puntos Visitante</th><th>Temporada</th></tr>";
                
                for ($i=0; $i<$resultado->num_rows; $i++)
                {
                    $registro = $resultado->fetch_assoc();
                    echo "<tr>";
                        echo "<td>".$registro["codigo"]."</td><td>".$registro["equipo_local"]."</td><td>".$registro["equipo_visitante"]
                            ."</td><td>".$registro["puntos_local"]."</td><td>".$registro["puntos_visitante"]."</td><td>".$registro["temporada"]."</td>";
                }
                echo "</tr>";
            }
            else
            {
              echo $nba->getMensaje();
            }

            


        ?>



    </main>

</body>

</html>