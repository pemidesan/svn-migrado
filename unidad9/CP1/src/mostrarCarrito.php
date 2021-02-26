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
            <header><h2 style="color:blue">Total Carrito</h2></header>
            <section>
                <?php
                    function mostrarDato($item)
                    {
                        if (empty($item))
                        {
                            echo 0;
                        }
                        else
                        {
                            echo $item;
                        }
                    }
                    echo "<p><img src='../imagenes/superdome.jpeg' width='80' height='150'></p>";
                    echo "Superdome. Unidades Solicitadas ";
                    mostrarDato($_COOKIE['qsuperdome']);
                    

                    echo "<p><img src='../imagenes/exadata.jpeg' width='80' height='150'></p>";
                    echo "Exadata. Unidades Solicitadas ";
                    mostrarDato($_COOKIE['qexadata']);


                    echo "<p><img src='../imagenes/3par.jpeg' width='80' height='150'></p>";
                    echo "3Par Unidades Solicitadas ";
                    mostrarDato($_COOKIE['q3par']);

                    echo "<p><img src='../imagenes/isilon.jpeg' width='80' height='150'></p>";
                    echo "Isilon Unidades Solicitadas ";
                    mostrarDato($_COOKIE['qisilon']);
                    
                ?>
                
            </section>            
        </main>
    </body>
</html>