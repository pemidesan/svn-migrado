<?php

class dbV2{

    private $host;
    private $usuario;
    private $password;
    private $bbdd;
    private $ok;
    private $conn;
    private $mensaje;
    private $arrayResult=[];

    public function __construct($host,$usuario, $password, $bbdd)
    {
        $this->host = $host;
        $this->usuario = $usuario;
        $this->password = $password;
        $this->bbdd = $bbdd;
        $this->mensaje="";
    }

    public function getArrayResult()
    {
        return $this->arrayResult;
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

    public function lectura($cadena)
    {
        $tabla= array();
        $resultado = $this->conn->query($cadena);
        if ($resultado->num_rows >0)
        {
            while ($fila = $resultado->fetch_assoc())
            {
                $tabla[] = $fila;
            }
        }
        $this->arrayResult = $tabla;
        return ($this->arrayResult);        
    }

    public function getClaves()
    {
       $claves = [];
       foreach($this->getArrayResult()[0] as $key => $valor)
       {
           $claves[] = $key;
       }
       return $claves;
    }

    
    public function pintaCabeceras()
    {
        $cabecera = $this -> getClaves();        
        
        $cadena = "<tr>";

        for ($i=0; $i<count($cabecera); $i++)
        {
            $cadena = $cadena."<th>".$cabecera[$i]."</th>";
        }
        $cadena = $cadena. "</tr>";
        
        return $cadena;
    }

    public function pintaDatos()
    {
        $datos = $this->getArrayResult();
        $claves = $this->getClaves();
        $cadena = "";
        echo $datos->num_rows;
        for ($i=0; $i<count($datos); $i++)
        {
            $cadena = $cadena."<tr>";
          for ($j=0;$j<count($claves); $j++)
          {
            $cadena = $cadena."<td>".$datos[$i][$claves[$j]]."</td>";            
          }
          $cadena = $cadena."</tr>";          
        }
        return $cadena;
    }
}
?>