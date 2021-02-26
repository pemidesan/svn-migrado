/*
create database paises

use paises
create table if not exists pais(
 id int AUTO_INCREMENT,
 nombre varchar(60),
 continente varchar(10),
 constraint pk_id primary key(id)
)Engine="INNODB";

*/
<?php
    include "bbdd.php"
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="Author" content="Pedro Miguel Deseado Sandonís">
        <meta title="Unidad 7. Tarea 3">
        <style type="text/css">
           table {border-spacing:0; text-align: center;}
           tr, td, th {background-color:beige;border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;}           
        </style>
    </head>
    <body>
        <header>
            <h1>Unidad 7. Desarrollo entorno servidor. Tarea 3. </h1>
            <h2>Author: Pedro Miguel Deseado Sandonís</h2>            
            <?php
                $objBbdd = new bbdd("localhost","pemidesan","S1nPerd0n","paises");
                if ($objBbdd->conexion())
                {
                    $lectura = $objBbdd->lectura("select * from paises.pais");
                    echo "<table>";
                    echo "<tr><th>Id</th><th>Pais</th><th>Continente</th></tr>";
                    for ($i=0; $i<$lectura->num_rows; $i++)
                    {
                        $registro = $lectura->fetch_assoc();
                        echo "<tr>";
                        echo "<td>".$registro["id"]."</td><td>".$registro["nombre"]."</td><td>".$registro["continente"]."</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                }
                else
                {
                    echo "<p> Error de conexion </p>";
                }
                $objBbdd->cerrar();
            ?>
        </header>
        <main>
            
        </main>
    </body>
</html>