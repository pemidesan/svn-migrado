<?php
    include "dbV3.php"
?>

<!DOCTYPE html>
<html lang="es">
    <head>

        <meta charset="utf-8">
        <title>Desarrollo Entorno Servidor. Caso Práctico 1. Unidad 8.</title>
        <style type="text/css">
            table {border-spacing:0; text-align: center;}
            tr, td, th {background-color:beige;border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;}           
        </style>
    </head>
    <body>
        <header>
            <h1>Desarrollo Entorno Servidor. Caso Práctico 3. Unidad 8.</h1>
            <h2>Autor. Pedro Miguel Deseado Sandonís</h2>
        </header>
        <main>            
                <h2>NBA. Caso Práctico 3. CRUD COMPLETO. Filtro Complejo</h2>            
                <h2>Borrado de equipo.</h2>
                <section>

                    <?php

                        $nba = new dbV3("localhost","pemidesan","S1nPerd0n","nba");
                        if($nba->conexion())
                        {
                            $cadenaborrado = "delete from equipos where Nombre='".$_POST["nombre"]."'";
                            echo $cadenaBorrado;
                            $cadenaseleccion = "select * from equipos where Nombre='".$_POST["nombre"]."'";
                            $nba->lectura($cadenaseleccion);
                            echo "<table>";
                            echo $nba->pintaCabeceras();
                            echo $nba->pintaDatos();
                            echo "</table>";
                            echo "<br><br><br>";                            
                            $nba->actualizar($cadenaborrado);                            
                            echo $nba->getMensaje();
                            echo "<br><br>";
                        }
                        echo "<a href='index.html'>Volver a menú principal</a>";
                    ?>
                </section>
        </main>
    </body>
</html>