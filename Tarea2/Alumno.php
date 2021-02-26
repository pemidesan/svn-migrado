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
    
    public function getNombre()
    {
        return $this->nombre;
    }
    
    public function getEdad()
    {
        return $this->edad;
    }
    
    public function getCurso()
    {
        return $this->curso;
    }
    
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    
    public function setEdad($edad)
    {
        $this->edad = $edad;
    }
    
    public function setCurso($curso)
    {
        $this->curso = $curso;
    }
}
