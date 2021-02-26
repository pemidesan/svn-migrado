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
                <?php
                    session_start();
                    $_SESSION=[];
                    session_unset();
                    session_destroy();
                    header("Location:Deseado_Sandonis_Pedro_Miguel_UD9_TA2_Form.php");
                ?>                
            </form>
        </main>
    </body>
</html>