<?php
    include "conexion.php"
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="Author" content="Pedro Miguel Deseado Sandonís">
        <meta title="Unidad 7. Tarea 2">
    </head>
    <body>
        <header>
            <h1>Unidad 7. Desarrollo entorno servidor. Tarea 2. </h1>
            <h2>Author: Pedro Miguel Deseado Sandonís</h2>
            <p> Comprobando conexión </p>
            <?php
                echo conectarBBDD("localhost","pemidesan","S1nPerd0n","ClubBasquet");
            ?>
        </header>
        <main>
            
        </main>
    </body>
</html>