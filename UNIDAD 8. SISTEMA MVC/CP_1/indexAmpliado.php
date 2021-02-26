<!DOCTYPE html>
<html lang="es">


<head>

    <meta charset="utf-8">
    <title>Desarrollo Entorno Servidor. Caso Práctico 1. Unidad 8.</title>

</head>

<body>

    <header>
        <h1>Desarrollo Entorno Servidor. Caso Práctico 1. Unidad 8.</h1>
        <h2>Autor. Pedro Miguel Deseado Sandonís</h2>
    </header>
    <main>
        <head>
            <h1>Juego de Tronos</h1>
        </head>
        <a href="actores.php">Listado de Actores</a><br><br><br>
        <!--<a href="actoresTemp.php">Actores por Episodio</a>-->
        <form action="actoresAmpliado.php" method="POST">
            <p>Listado de Actores por episodio</p>
            <select name="episodio">
                <option value ="0">..</option>
                <option value="1">Uno</option>
                <option value="2">Dos</option>
                <option value="3">Tres</option>
                <option value="4">Cuatro</option>
                <option value="5">Cinco</option>
                <option value="6">Seis</option>
                <option value="7">Siete</option>
                <option value="8">Ocho</option>
                <option value="9">Nueve</option>
                <option value="10">Diez</option>
            </select>
            <input type="submit" value="enviar">
        </form>
        

    </main>

</body>

</html>