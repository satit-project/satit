<?php

class Connection extends PDO {

    private $tipo = "mysql";
    private $dbhost = "localhost";
    private $dbname = "satit";
    private $dbuser = "root";
    private $dbpass = "";
    
    public function __construct () {
        try{
            parent::__CONSTRUCT(
                $this->tipo.':host='.$this->dbhost.
               ';dbname='. $this->dbname,
                $this->dbuser,
                 $this->dbpass);

        }catch(PDOException $e)
        {
            echo "Ha surgido un error y no se pued  conectar a la base de datos. Detalle:" .$e->getMessage();
            exit;
        }
    }



    public function closeConnection()
    {
        mysqli_close($this->conn);
    }

    public function __get($name)
    {
        return $this->$name;   
    }

    public function __set($name, $value)
    {
        return $this->$name = $value;
    }

    public function getArray() {
        $array = [$this->dbhost, $this->dbname,$this->dbuser, $this->dbpass];
        return $array;
    }
 
}    




?>