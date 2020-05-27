<?php
require ("../php/conn.php");

class Connect {

    private $dbhost;
    private $dbuser;
    private $dbpass;
    private $dbname;
    private $conn;
    function __construct($dbhost, $dbuser, $dbpass, $dbname)
    {
        $this->dbhost=$dbhost;
        $this->dbuser=$dbuser;
        $this->dbpass=$dbpass;
        $this->dbname=$dbname;
    }

    function conect(){
        $this->conn = mysqli_connect(
            $this->dbhost,
            $this->dbuser,
            $this->dbpass,
            $this->dbname,
            );
            return $this->conn;
     }

    function chekConection()
    {
    // Check connection
        if (!$this->conect()) {
        die("Connection failed: " . mysqli_connect_error());
        }
    }

    function closeConnection()
    {
        mysqli_close($this->conn);
    }




}    




?>