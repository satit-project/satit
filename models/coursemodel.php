<?php

class CourseModel extends Model{
    
    
    public function __construct(){
        parent::__construct();
       
    }
    
    public function insert($datos){
        // insertar datos en la BD
        $query = $this->db->connect()->prepare('INSERT INTO cursos(titulo, descripcion, horario,fecha) VALUES(:title,:description, :hour, :date)');
        try{
            $query->execute([
                'title'  =>$datos['title'], 
                'description'    =>$datos['description'], 
                'hour'=>$datos['hour'],
                'date'=>$datos['date']
                ]);
            return true;            
        }catch(PDOException $e){
            
            return false;
        }
      
    }
    
    public function getCourses()
    {
        $items = [];
        try{
            $query = $this->db->connect()->query("SELECT * FROM cursos");
            if($query->fetch()){

                    while($row = $query->fetch())
                    {
                        $item = new Course();
                        $item->id = $row['id'];
                        $item->title = $row['titulo'];
                        $item->description  = $row['descripcion'];
                        $item->hour  = $row['horario'];
                        $item->date  = $row['fecha'];
                        array_push($items, $item);

                    }
               }
            return $items;
        }catch(PDOException $e){
            return [];
        }
    }
}
?>