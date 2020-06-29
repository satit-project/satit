<?php
class User extends Model{
        private $employeeID="";
        private $password="";
        private $name="";
        private $job="";

    function __construct(){
        parent::__construct();
         $this->employeeID="";
         $this->password="";
    }

    public function userExists($employeeID, $pass ){
        $md5pass = md5($pass);

        $query = $this->db->connect()->prepare('SELECT * FROM empleados WHERE id = :employeeID and password = :pass');
        $query->execute(['employeeID'=> $employeeID, 'pass'=> $md5pass]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }


    public function setUser($userID){
        $query = $this->db->connect()->prepare('SELECT * FROM empleados WHERE id = :employeeID');
        $query->execute(['employeeID'=>$userID]);

        foreach( $query as $currentUser ) {
            $this->id = $currentUser['id'];
            $this->name = $currentUser['nombre'];
            $this->job = $currentUser['puesto_id'];
        }
    }

    public function get($name){
        return $this->$name;
    }
    public function set($name,$value){
         $this->$name = $value;
    }
}

?>
