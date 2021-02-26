<?php
    include "bbdd.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="Author" content="Pedro Miguel Deseado Sandonís">
        <style type="text/css">
           table {border-spacing:0; text-align: center;}
           tr, td, th {background-color:beige;border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;}           
        </style>
    </head>
    <body>
        <header>
            <h1>Caso Práctico. Evaluación Final 3.</h1>
            <h2>Autor: Pedro Miguel Deseado Sandonís</h2>
        </header>        
        <main>
            <?php
                $objetoBbdd = new bbdd("localhost","pemidesan","S1nPerd0n","empresa");
                if ($objetoBbdd->conexion())
                {
                    echo "<table>";
                    echo "<tr><th>Semana</th><th>Total Ventas</th></tr>";

                    $lecturaVentas = $objetoBbdd->lectura("select num_semana semana, sum(venta) suma from ventas group by num_semana");                    

                    for ($i=0; $i<$lecturaVentas->num_rows; $i++)
                    {
                        $registro = $lecturaVentas ->fetch_assoc();
                        echo "<tr><td>".$registro["semana"]."</td><td>".$registro["suma"]." €</td></tr>";
                    }
                    echo "</table>";                    

                    echo "<br><br><br><br>";

                    echo "<table>";
                    echo "<tr><th>Semana</th><th>Total Gastos</th></tr>";
                    $lecturaGastos = $objetoBbdd->lectura("select num_semana semana, sum(gasto) gasto from gastos group by num_semana");                    
                    for ($i=0; $i<$lecturaGastos->num_rows; $i++)
                    {
                        $registro = $lecturaGastos ->fetch_assoc();
                        echo "<tr><td>".$registro["semana"]."</td><td>".$registro["gasto"]." €</td></tr>";
                    }
                    echo "</table>";

                    echo "<br><br><br><br>";

                    echo "<table>";
                    echo "<tr><th>Semana</th><th>Total Ventas</th><th>Total Gastos</th><th>Beneficios</th></tr>";

                    $sentencia = 
                    "select tabla1.semana, tabla1.total_ventas, tabla2.total_gastos, tabla1.total_ventas-tabla2.total_gastos beneficios 
                    FROM (select num_semana semana, sum(venta) total_ventas from ventas group by num_semana) tabla1
                    JOIN (select num_semana semana, sum(gasto) total_gastos from gastos group by num_semana) tabla2
                    ON tabla1.semana = tabla2.semana";
                   
                    $lecturaBeneficios = $objetoBbdd->lectura($sentencia);

                    for ($i=0; $i<$lecturaBeneficios->num_rows; $i++)
                    {
                        $registro = $lecturaBeneficios ->fetch_assoc();
                        echo "<tr><td>".$registro["semana"].
                             "</td><td>".$registro["total_ventas"].
                             " €</td><td>".$registro["total_gastos"].
                             " €</td><td>".$registro["beneficios"]." €</td></tr>";
                    }
                    echo "</table>";        
                }
                else
                {
                    echo "<p>Error</p>";
                }
                $objetoBbdd->cerrar();
            ?>
        </main>
    </body>
</html>