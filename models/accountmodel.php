<?php
include_once('job.php');
class AccountModel extends Model{
    
    
    public function __construct(){
        parent::__construct();
        
    }
    
    public function insert($datos) {
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
                $item->jobID = $row['id'];
                $item->job  = $row['puesto'];
                
                array_push($items, $item);
            }
            return $items;
        }catch(PDOException $e){
            return [];
        }
    }
    
    public function getById($id) {
        $item = new User();
        $query = $this->db->connect()->prepare("SELECT nombre, apellidos, puesto_id FROM empleados WHERE id = :id");
        try{
            $query->execute(['id'=>$id]);
            while($row = $query->fetch()){
                $item->set('userID',$id);
                $item->set('name',$row['nombre']);
                $item->set('sourname',$row['apellidos']);
                $item->set('job',$row['puesto_id']);
                
            }
            return $item;
        }catch(PDOException $e){
            return null;
        }
        
    }
    
    public function getEmployees() 
    {
        $items = [];
        try{
            $query = $this->db->connect()->query("SELECT id, nombre, apellidos, puesto_id FROM empleados");
            while($row = $query->fetch())
            {
                $item = new User();
                $item->set('userID',$row['id']);
                $item->set('name',$row['nombre']);
                $item->set('sourname',$row['apellidos']);
                $item->set('job',$row['puesto_id']);
                
                array_push($items, $item);
            }
            return $items;
        }catch(PDOException $e){
            return [];
        }
    }
    
    
    public function update($item){
        $query = $this->db->connect()->prepare("UPDATE empleados SET nombre = :name, apellidos= :sourname, puesto_id = :job, password = :password WHERE id = :userID");
        try{

            $query->execute([
                'userID'=>$item['userID'],
                'name'=>$item['name'],
                'sourname'=> $item['sourname'],
                'password' => $item['password'],
                'job' => $item['job']
            
            ]);
            
            return true;
        }catch(PDOExeption $e){
            return false;
        }
    }
}
?>