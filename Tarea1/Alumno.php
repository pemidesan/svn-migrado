<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Alumno
 *
 * @author pemidesan
 */
class Alumno {
    
    private $nombre;
    private $edad;
    private $curso;
    
    public function cambiarNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    
    public function mostrarNombre()
    {
        return $this->nombre;
    }

}
