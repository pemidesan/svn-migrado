<!DOCTYPE html>

<html lang="ES">
    <head>
        <title>Unidad 9. Sesiones, Seguridad y Autenticación</title>
        <meta name="Author" content="Pedro Miguel Deseado Sandonís">
        <meta charset = "UTF-8">
    </head>
    <body>
        <header>
            <h1>Unidad 9. Sesiones, Seguridad y Autenticación. Tarea 1.</h1>
            <h2>Autor:Pedro Miguel Deseado Sandonís</h2>
        </header>
        <main>
            <form name="Formulario" action="Deseado_Sandonis_Pedro_Miguel_UD9_TA1.php" method="POST">

                <p>Nombre&nbsp;<input type="text" placeholder="Nombre"  name ="nombre"></p>
                <?php
                    session_start();
                    echo "<h4>Valor anterior introducido&nbsp;<p style='color:red'>".$_SESSION['nombre']."</p></h4>";
                ?>
                <input type="submit" value="enviar">

                
            </form>
        </main>
    </body>
</html>