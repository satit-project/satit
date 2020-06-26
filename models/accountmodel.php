<?php
include_once('job.php');
class AccountModel extends Model{
    
    
    public function __construct(){
        parent::__construct();
        
    }
    
    public function insert($datos){
        // insertar datos en la BD
        $query = $this->db->connect()->prepare('INSERT INTO empleados(id, nombre, apellidos, password, puesto_id ) VALUES(:userID,:name, :sourname, :password, :job)');
        try{
            $query->execute([
                'userID'  =>$datos['userID'], 
                'name'    =>$datos['name'], 
                'sourname'=>$datos['sourname'],
                'password'=>$datos['password'],
                'job'     =>$datos['job']
                ]);
            return true;            
        }catch(PDOException $e){
            
            return false;
        }
      
    }
    
    public function getJobs()
    {
        $items = [];
        try{
            $query = $this->db->connect()->query("SELECT * FROM puestos");
            while($row = $query->fetch())
            {
                $item = new Job();
                $item->jobID= $row['id'];
                $item->job = $row['puesto'];
                
                array_push($items, $item);
            }
            return $items;
        }catch(PDOException $e){
            return [];
        }
    }
}
?>