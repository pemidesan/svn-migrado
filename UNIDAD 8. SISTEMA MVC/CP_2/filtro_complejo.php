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
            <h1>Desarrollo Entorno Servidor. Caso Práctico 2. Unidad 8.</h1>
            <h2>Autor. Pedro Miguel Deseado Sandonís</h2>
        </header>
        <main>
            <head>
                <h2>NBA. Resultados Equipo. Filtro Complejo</h2>
            </head>
            <form action="resultados_equipo_complejo.php" method="POST">
                <?php
                   $nba = new dbV3("localhost","pemidesan","S1nPerd0n","nba");                
                   if($nba->conexion())
                   {   
                       echo $nba->rellenaSelect("select distinct nombre from equipos","equipo_local");                    
                       echo"<br><br>";
                       echo $nba->rellenaSelect("select distinct nombre from equipos","equipo_visitante");                    
                       echo"<br><br>";
                       echo $nba->rellenaSelect("select distinct temporada from partidos","temporada");
                   }
                   else
                   {
                       echo $nba->getMensaje();
                   }
                   $nba->cerrar();
                ?>
                <br><br><br>
                <input type="submit" value="Enviar">
            </form>
        </main>
    </body>
</html>