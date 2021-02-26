<?php

    class bbdd
    {
        private $servidor;
        private $usuario;
        private $password;
        private $bbdd;
        private $conn;

    
        public function __construct($servidor, $usuario, $password, $bbdd)        
        {
            $this->servidor = $servidor;
            $this->usuario = $usuario;
            $this->password = $password;
            $this->bbdd = $bbdd;                                    
        }

        public function conexion()
        {
            $this->conn = new mysqli($this->servidor,$this->usuario,$this->password,$this->bbdd);

            if ($this->conn->connect_errno)
            {
                echo "Conexión fallida: ".$this->conn->connect_errno.": ".$this->conn->connect_error;
                return false;
            }
            else
            {
                return true;
            }
            
            
        }

        public function lectura($consulta)
        {
            return $this->conn->query($consulta);

        }

        public function cerrar()
        {
            $this->conn->close();
        }

    }
?>