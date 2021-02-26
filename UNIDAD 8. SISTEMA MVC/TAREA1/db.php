<?php

class db{

    private $host;
    private $usuario;
    private $password;
    private $bbdd;
    private $ok;
    private $conn;
    private $mensaje;
    private $array;

    public function __construct($host,$usuario, $password, $bbdd)
    {
        $this->host = $host;
        $this->usuario = $usuario;
        $this->password = $password;
        $this->bbdd = $bbdd;
        $this->mensaje="";
    }

    public function getMensaje()
    {
        return $this->mensaje;
    }

    public function conexion()
    {
        $this->conn =  new mysqli($this->host,$this->usuario,$this->password,$this->bbdd);

        if ($this->conn->connect_errno)
        {
            $this->mensaje = "Conexión fallida. Código de error: ".$this->conn->connect_errno." ".$this->conn->connect_error;
            return false;
        }
        else
        {
            $this->mensaje = "Conexión correctamente establecida";
            return true;
        }
    }

    public function lectura_equipo($query)
    {
        return $this->conn->query($query);
        
    }

}
?>