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
            $connexion= new mysqli("localhost", "pemidesan", "SinPerd0n", "nba");
            if ($connexion->errno)
            {
                echo "<p>".$connexion->errno." ".$connexion->error."</p>";
            }
            else
            {
                echo "<p> Todo ok</p>";
            }
        ?>
    </body>
</html>
