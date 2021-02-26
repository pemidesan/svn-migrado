<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">        
    </head>
    <body>
        <main>
            <?php
                include 'Jugador.php';
                include 'Equipo.php';
                
                $equipo = new Equipo();
                for ($i=1;$i<=9;$i++)
                {
                    $jugador = new Jugador($i);
                    $jugador->addPuntos(rand(20, 100));
                    echo "<p>Jugador número ".$i." = ".$jugador->getPuntos()." puntos</p>";
                    $equipo->addJug($jugador);
                }
                echo "Total puntos conseguidos: ".$equipo->getTotal();
            ?>
            
        </main>
    </body>
    
</html>


