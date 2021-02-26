<?php
    class Equipo
    {
        private $jugadores = Array();
        
        public function addJug($jugador)
        {
            $this->jugadores[] = $jugador;
        }
        
        public function getTotal()
        {
            $contador=0;            
            for ($i=0;$i<count($this->jugadores);$i++)
            {
                $contador += $this->jugadores[$i]->getPuntos();
            }
            return $contador;
        }
        
        public function getJug($numJugador)
        {
            $contador=0;
            $encontrado=false;
            $nElementos = count($this->jugadores);
            while($contador < $nElementos && !$encontrado)
            {
                if ($this->jugadores[$contador]->getNumJug() == $numJugador)
                {
                    $encontrado = true;
                }
                {
                    $contador += 1;
                }
            }
            if (!$encontrado)
            {
                $contador = -1;
            }
            return $contador;
        }
    }   

?>