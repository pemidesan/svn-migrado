<?php

function actualizarCarrito()
{
    $nombre = $_COOKIE['producto'];
    $qcantidad = 'q'.$nombre;

 
       if (isset($_COOKIE[$qcantidad]))
       {
          $acumulado = $_COOKIE[$qcantidad]+$_POST['selectorCantidad'];
          setcookie($qcantidad,$acumulado,0);
       }                 
       else
       {
           $acumulado=$_POST['selectorCantidad'];
           setcookie($qcantidad,$acumulado,0);
       }       
       echo $acumulado;
       echo "Actualizado";      
 
}

actualizarCarrito();
header("location:compraWeb.php");

?>