<?php
    include "dbV3.php";
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
                <h2>Borrar Equipo</h2>
                <section>
                    <form action="borrar.php" method="POST">
                        <?php
                            $nba = new dbV3("localhost","pemidesan","S1nPerd0n","nba");
                            if($nba->conexion())
                            {
                                $nba->rellenaSelect("select distinct Nombre from equipos","nombre");                                
                            }
                            $nba->cerrar();
                        ?>
                        <br><br><br>
                        <input type="submit" value="Borrar Equipo">
                    </form>
                    <?php
                       
                    ?>
                </section>
        </main>
    </body>
</html>