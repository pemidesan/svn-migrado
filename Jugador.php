<?php

    class Jugador
    {
        private $numeroJug=0;
        private $ptos=0;
        
        public function __construct($numeroJug) 
        {
            $this->numeroJug = $numeroJug;
        }
        
        public function getNumJug()
        {
            return $this->numeroJug;
        }
        
        public function getPuntos()
        {
            return $this->ptos;
        }
        
        public function addPuntos($ptos)
        {
            $this->ptos += $ptos;
        }
    }

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

