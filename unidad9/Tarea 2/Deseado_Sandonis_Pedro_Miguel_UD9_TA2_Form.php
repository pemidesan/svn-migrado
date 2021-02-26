<!DOCTYPE html>

<html lang="ES">
    <head>
        <title>Unidad 9. Sesiones, Seguridad y Autenticación</title>
        <meta name="Author" content="Pedro Miguel Deseado Sandonís">
        <meta charset = "UTF-8">
    </head>
    <body>
        <header>
            <h1>Unidad 9. Sesiones, Seguridad y Autenticación. Tarea 2.</h1>
            <h2>Autor:Pedro Miguel Deseado Sandonís</h2>
        </header>
        <main>
            <form action="Deseado_Sandonis_Pedro_Miguel_UD9_TA2.php" method="POST">
                <p>Introduzca Nombres&nbsp;<input type="text" placeholder="Nombre"  name ="nombre"></p>
                <?php
                    
                    session_start();
                    
                    echo "<textarea rows='10' cols='30'>".implode("\n",$_SESSION['historico'])."</textarea>";
                
                    echo "<p><input type='submit' value='Enviar'></p>";

                    if (!empty($_SESSION['historico']))
                    {
                        echo "<a href='destruir.php'>Cerrar Sesión</a>";
                    }
                    else
                    {
                        echo "vacio";
                    }
                ?>
                
            </form>
        </main>
    </body>
</html>