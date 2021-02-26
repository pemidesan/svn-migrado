<?php


class objeto
{
    private $imagen;
    private $nombre;    

    public function __construct($ruta_imagen, $nombre_producto)
    {

        $this ->imagen = $ruta_imagen;
        $this ->nombre = $nombre_producto;
    }

    

    public function generaImagen()
    {       
        echo "<img src='".$this->imagen."'>";
    }

    private function generaMenu()
    {
        //$selectorCantidad = $this->nombre;
        //echo "<select name='".$selectorCantidad."'>";
        echo "<select name='selectorCantidad'>";
        echo "<option value='..'>..</option>";
        for ($i=1;$i<100;$i++)
        {
            echo "<option value='".$i."'>".$i."</option>";
        }
        echo "</select>";   
    }

    private function generaCookie()
    {
        setcookie('producto',$this->nombre,time()+30);
        
    }

    public function generaProducto()
    {
        $this->generaImagen();
        $this->generaCookie();
        echo "<p>Cantidad</p>";                          
        $this->generaMenu();     
    }

    public function calcularCantidades($cantidades)
    {
        
         if (isset($_COOKIE[$cantidades]))
         {
             $acumulado = $_COOKIE[$cantidades]+$_POST[$this->nombre];
            setcookie($cantidades,$acumulado,time()+30);
         }                 
         else
         {
             $acumulado=$_POST['superdome'];
            setcookie($cantidades,$acumulado,time()+30);
         }
        
        echo "<h4>".$this->nombre."</h4>";
        echo "<p><img src='".$this->imagen."' width='80' height='150'></p>";
        echo "Cantidad ".$acumulado;
        return $acumulado;
    }

    public function destruccion()
    {
        setcookie('producto','destruccion',time()-1);
        setcookie('selectorCantidad','destruccion',time()-1);
       header("location:compraWeb.php");
    }

}
?>
