<?php

class mostrarProducto
{
    private $objeto;
    public function __construct($objeto)
    {
        $this -> objeto = $objeto;
        
        $this->objeto->generaImagen();
        
    }
}
?>