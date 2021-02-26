<?php
    include "bbdd.php"
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="Author" content="Pedro Miguel Deseado Sandonís">
        <meta title="Unidad 7. Tarea 3">
    </head>
    <body>
        <header>
            <h1>Unidad 7. Desarrollo entorno servidor. Tarea 3. </h1>
            <h2>Author: Pedro Miguel Deseado Sandonís</h2>
            <p> Comprobando conexión </p>
            <?php
                $objBbdd = new bbdd("localhost","pemidesan","S1nPerd0n","ClubBasquet");
                if ($objBbdd->conexion())
                {
                    $lectura = $objBbdd->lectura("select * from ClubBasquet.jugadores");
                    for ($i=0; $i<$lectura->num_rows; $i++)
                    {
                        $registro = $lectura->fetch_assoc();
                        echo "<p>".$registro["id"]." -- ".$registro["nombreJugador"]." -- ".$registro["posicion"]." -- ".$registro["numero"]." -- ".$registro["edad"];
                    }
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