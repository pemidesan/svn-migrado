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
            $alumno3 = new Alumno();
            
            $alumno1->setNombre("Pedro Miguel");
            $alumno1->setCurso(2);
            $alumno1->setEdad(45);
            
            $alumno2->setNombre("Isaac");
            $alumno2->setCurso(1);
            $alumno2->setEdad(3);
            
            $alumno3->setNombre("Pedro");
            $alumno3->setCurso(6);
            $alumno3->setEdad(11);
            
            echo "<p>El alumno con nombre ".$alumno1->getNombre()." cursa ".
                 $alumno1->getCurso()." curso y tiene ".$alumno1->getEdad()." años</p>";
            
            echo "<p>El alumno con nombre ".$alumno2->getNombre()." cursa ".
                 $alumno2->getCurso()." curso y tiene ".$alumno2->getEdad()." años</p>";
            
            echo "<p>El alumno con nombre ".$alumno3->getNombre()." cursa ".
                 $alumno3->getCurso()." curso y tiene ".$alumno3->getEdad()." años</p>";
        ?>
    </body>
</html>
