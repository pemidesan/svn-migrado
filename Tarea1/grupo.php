<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            include 'Alumno.php';
             $alumno1 = new Alumno();
             $alumno2 = new Alumno();
             $alumno1->cambiarNombre("Pedro Miguel");
             $alumno2->cambiarNombre("Isaac");
             echo "<p>Nombre del alumno: ".$alumno1->mostrarNombre()."</p>";
             echo "Nombre del alumno: ".$alumno2->mostrarNombre()."</p>";
        ?>
    </body>
</html>
