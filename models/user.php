<?php
class User extends Model{
        private $userID="";
        private $password="";
        private $name="";
        private $job="";
        
    function __construct(){
        parent::__construct();
         $this->userID="";
         $this->password="";
    }
    
    public function userExists($userID, $pass ){
        $md5pass = md5($pass);
        
        $query = $this->db->connect()->prepare('SELECT * FROM empleados WHERE id = :userID and password = :pass');
        $query->execute(['userID'=> $userID, 'pass'=> $md5pass]);
        
        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }
    
    
    public function setUser($userID){
        $query = $this->db->connect()->prepare('SELECT * FROM empleados WHERE id = :userID');
        $query->execute(['userID'=>$userID]);
        
        foreach( $query as $currentUser ) {
            $this->id = $currentUser['id'];
            $this->name = $currentUser['nombre'];
            $this->job = $currentUser['puesto_id'];
        }
    }
    
    public function getName(){
        return $this->name;
    }
}

?>