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
                    if (!isset($_SESSION['historico']))
                    {                       
                        $_SESSION['historico']=array($_POST['nombre']);
                    }
                    else
                        {
                            array_push($_SESSION['historico'],$_POST['nombre']);                    
                        }       
                    header("Location:Deseado_Sandonis_Pedro_Miguel_UD9_TA2_Form.php");                    
                ?>
                
            </form>
        </main>
    </body>
</html>