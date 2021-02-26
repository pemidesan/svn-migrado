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
                <?php
                    session_start();
                    $_SESSION['nombre'] =  $_POST['nombre'];
                    echo "<h3 style='color:blue'> Nombre introducido en formulario: ".$_SESSION['nombre']."</h3>";
                   
                ?>
                <a href="Deseado_Sandonis_Pedro_Miguel_UD9_TA1_Form.php">Volver a Formulario</a>
            </form>
        </main>
    </body>
</html>