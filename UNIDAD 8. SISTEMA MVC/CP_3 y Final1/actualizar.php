<?php
    include "dbV3.php"
?>

<!DOCTYPE html>
<html lang="es">
    <head>

        <meta charset="utf-8">
        <title>Desarrollo Entorno Servidor. Caso Práctico 1. Unidad 8.</title>

    </head>
    <body>
        <header>
            <h1>Desarrollo Entorno Servidor. Caso Práctico 3. Unidad 8.</h1>
            <h2>Autor. Pedro Miguel Deseado Sandonís</h2>
        </header>
        <main>            
                <h2>NBA. Caso Práctico 3. CRUD COMPLETO. Filtro Complejo</h2>            
                <h2>Actualización del equipo.</h2>
                <section>

                    <?php

                        $nba = new dbV3("localhost","pemidesan","S1nPerd0n","nba");
                        if($nba->conexion())
                        {
                            $cadenaInsercion = "update equipos set Ciudad='".$_POST["ciudad"]."' , Conferencia='".$_POST["conferencia"]."' , Division='".$_POST["division"].
                                             "' where Nombre= '".$_POST["nombre"]."'";
                            echo $cadenaInsercion;
                            $nba->actualizar($cadenaInsercion);                            
                            echo $nba->getMensaje();
                            echo "<br><br>";
                        }
                        echo "<a href='index.html'>Volver a menú principal</a>";
                    ?>
                </section>
        </main>
    </body>
</html>