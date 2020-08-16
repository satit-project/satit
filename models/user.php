<?php
class User extends Model{
        public $employeeID="";
        private $password="";
        public $name="";
        public $job="";

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
        $query = $this->db->connect()->prepare('SELECT empleados.id as"employeeID", concat(empleados.nombre, " ",
         empleados.apellidos) as "nombre", empleados.puesto_id, puestos.id, puestos.puesto
        FROM empleados INNER JOIN puestos ON empleados.puesto_id = puestos.id WHERE empleados.id = :employeeID');
        $query->execute(['employeeID'=>$userID]);

        echo print_r($query);
        foreach( $query as $currentUser ) {
            $this->set('employeeID',$currentUser['employeeID']);
            $this->set('name', $currentUser['nombre']);
            $this->set('job', $currentUser['puesto']);
        }

    }

    public function get($name){
        return $this->$name;
    }

    public function getAllData(){
        return ["employeeID" => $this->user->get("employeeID"),
                "name"=> $this->user-get("name"),
                "job"=> $this->user->get("job")];
    }


    public function set($name,$value){
         $this->$name = $value;
    }
}

?>
