<?php
//include "Opciones.php";
include "objeto.php";

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
        </header>
        <main>          
            <section>
               <!-- <img src="../imagenes/superdome.jpeg"> -->
            </section>
            <section>                                
                    <form action="actualizarCarrito.php" method="POST">
                        <?php      
                            echo "<header><h2 style='color:blue'>SERVIDOR ".strtoupper($_POST['producto'])."</h2></header>";

                            $ruta_imagen="../imagenes/".$_POST['producto'].".jpeg";                    
                            $objeto = new objeto($ruta_imagen,$_POST['producto']);
                            $objeto->generaProducto();                            
                        ?>
                        <br><br>
                        <input type="submit" value="Añadir al Carrito">
                    </form>
                </p>                
            </section>
        </main>
    </body>
</html> 