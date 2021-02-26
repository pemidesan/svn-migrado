
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
            <h2>Compra de artículos</h2>
            <section>
                <form action="producto.php" method="POST">
                    <?php
                        echo "<select name='producto'>";
                        echo "<option value='..'>..</option>";            
                        echo "<option value='superdome'>Compra de Superdome HP</option>";
                        echo "<option value='exadata'>Compra de Exadata Oracle</option>";
                        echo "<option value='3par'>Compra de 3PAR HP</option>";
                        echo "<option value='isilon'>Compra de ISILON EMC</option>";
                        echo "</select>";   
                    ?>                    
                    <input type="submit" value="Comprar Producto">
                </form>
                <br><br>
                <a href="mostrarCarrito.php">Ver Mi Carrito</a>
            </section>
            <br><br>
            <a href="destruirCookies.php">Destruir Cookies</a>
        </main>

    </body>
</html>