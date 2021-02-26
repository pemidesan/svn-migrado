<?php

?>
<!DOCTYPE html>
<html lang="ES">
    <head>
        <meta charset="UTF-8">
        <title>Desarrollo Entorno Servidor. Unidad 9. Caso Práctico 1.</title>
        <meta name ="Author" content="Pedro Miguel Deseado Sandonís">
    </head>
    <body>
        <header>
            <h1>Desarrollo Entorno Servidor. Unidad 9. Caso Práctico 1.</h1>
            <h2>Autor Pedro Miguel Deseado Sandonís</h2>
            <a href="compraWeb.php">menu principal</a>
        </header>
        <main>
            <header><h2 style="color:blue">Carrito</h2></header>
            <section>
                <?php
                    if($_COOKIE['producto']=='superdome')
                    {   
                         if (isset($_COOKIE['qSuperdome']))
                         {
                             $acumulado = $_COOKIE['qSuperdome']+$_POST['superdome'];
                            setcookie('qSuperdome',$acumulado,time()+30);
                         }                 
                         else
                         {
                             $acumulado=$_POST['superdome'];
                            setcookie('qSuperdome',$acumulado,time()+30);
                         }
                        
                        echo "<h4>Superdome</h4>";
                        echo "<p><img src='../imagenes/superdome.jpeg' width='80' height='150'></p>";
                        echo "Cantidad ".$acumulado;
                    }
                ?>
                
                <h4>Exadata</h4>  
                <p><img src="../imagenes/exadata.jpeg" width="80" height="150"></p>
                <h4>3Par</h4>  
                <p><img src="../imagenes/3par.jpeg" width="80" height="150"></p>
                <h4>Isilon</h4>  
                <p><img src="../imagenes/isilon.jpeg" width="80" height="150"></p>
            </section>            
        </main>
    </body>
</html>