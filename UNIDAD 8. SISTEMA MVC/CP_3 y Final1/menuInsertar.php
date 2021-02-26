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
                <h2>Insertar Equipo</h2>
                <section>
                    <form action="insertar.php" method="POST">
                        <p>Nombre <input type="text" name="nombre" placeholder="Nombre nuevo equipo"></p>
                        <p>Ciudad <input type="text" name="ciudad" placeholder="Ciudad"></p>    
                        <?php
                            $nba = new dbV3("localhost","pemidesan","S1nPerd0n","nba");
                            if($nba->conexion())
                            {
                                $nba->rellenaSelect("select distinct conferencia from equipos","conferencia");                                
                                echo "<br><br>";
                                $nba->rellenaSelect("select distinct division from equipos","division");
                                
                            }
                            $nba->cerrar();
                        ?>
                        <br><br><br>
                        <input type="submit" value="Añadir Equipo">
                    </form>
                    <?php
                       
                    ?>
                </section>
        </main>
    </body>
</html>