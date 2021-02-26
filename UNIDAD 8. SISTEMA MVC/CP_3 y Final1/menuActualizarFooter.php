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
                <section>
                    <form action="actualizar.php" method="POST">
                        <?php
                            $nba= new dbV3("localhost","pemidesan","S1nPerd0n","nba");
                            echo "<h3> Equipo: &nbsp".$_POST["Nombre"]."</h3>";
                            if ($nba->conexion())
                            {                                
                                $cadena="select * from equipos where Nombre='".$_POST["Nombre"]."'";
                                echo "<input type='hidden' name='nombre' value='".$_POST["Nombre"]."'";
                                $nba->lectura($cadena);
                                $tabla=$nba->getDatos();                                                            
                                $nba->rellenaSelect("select distinct ciudad from equipos","ciudad",$tabla[1]);
                                echo "<br><br>";
                                $nba->rellenaSelect("select distinct conferencia from equipos","conferencia",$tabla[2]);
                                echo "<br><br>";
                                $nba->rellenaSelect("select distinct division from equipos","division",$tabla[3]);
                            }
                        ?>
                        <br><br><br>
                        <input type="submit" value="Buscar y Actualizar Equipo">
                    </form>
                </section>
                <section>
                    
                </section>
        </main>
    </body>
</html>