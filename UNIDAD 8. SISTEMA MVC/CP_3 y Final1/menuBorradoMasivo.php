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
                    <form action="borradoMasivo.php" method="POST">
                        <input type="submit" value="Borrar Selección">
                        <br><br><br>
                        <?php

                            $nba = new dbV3("localhost","pemidesan","S1nPerd0n","nba");
                            if($nba->conexion())
                            {
                                
                                $cadenaseleccion = "select * from equipos";
                                $nba->lectura($cadenaseleccion);
                                echo "<table>";
                                echo $nba->pintaCabecerasCheck();
                                echo $nba->pintaDatosCheck();
                                echo "</table>";
                                echo "<br><br><br>";                                                        
                            }
                            echo "<a href='index.html'>Volver a menú principal</a>";
                        ?>
                    </form>
                </section>
        </main>
    </body>
</html>