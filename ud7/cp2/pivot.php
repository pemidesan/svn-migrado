<?php
    include "bbdd.php"
?>

<html lang="ES">
    <head>
        <meta charset="utf-8">
        <meta name="Author" content="Pedro Miguel Deseado Sandonís">
        <meta title="Desarrollo Entorno Servidor. Caso Práctico 2.">
        <style type="text/css">
           table {border-spacing:0; text-align: center;}
           tr, td, th {background-color:beige;border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;}           
        </style>
    </head>
    <body>
        <header>
                <h1>Desarrollo Entorno Servidor. Caso Práctico 2</h1>
                <h2>Autor: Pedro Miguel Deseado Sandonís.</h2>
        </header>        
        <main>
            <?php
                echo "<P>Posición PIVOT</P>";
                $bbddNBA = new bbdd("localhost","pemidesan","S1nPerd0n","nba");
                if ($bbddNBA->conexion())
                {
                    $resultado = $bbddNBA->lectura("select * from jugadores where posicion='C'");
                    echo "<table>";
                    echo "<tr><th>Codigo</th><th>Nombre</th><th>Procedencia</th><th>Altura</th>
                              <th>Peso</th><th>Posicion</th><th>Nombre Equipo</th>
                          </tr>";
                    for ($i=0; $i<$resultado->num_rows ;$i++)
                    {
                        $registro = $resultado->fetch_assoc();
                        echo "<tr>";
                        echo "<td>".$registro["codigo"]."</td><td>".$registro["Nombre"]."</td><td>".$registro["Procedencia"]
                            ."</td><td>".$registro["Altura"]."</td><td>".$registro["Peso"]."</td><td>".$registro["Posicion"]
                            ."</td><td>".$registro["Nombre_equipo"]."</td>";                        
                    }
                }
                else
                {
                    echo "<p>Error en conexión</p>";
                }
                $bbddNBA->cerrar();

            ?>
        </main>
    </body>
</html>