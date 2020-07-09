<?php
include_once('job.php');
class SetupModel extends Model{

    public function __construct(){
        parent::__construct();

    }

    public function insert($datos){
        // insertar datos en la BD
        $query = $this->db->connect()->prepare('INSERT INTO master(id, nombre, apellidos, password, puesto_id )
        VALUES(:employeeID,:name, :sourname, :password, :job)');
        $queryQuestions = $this->db->connect()->prepare('INSERT INTO preguntas_seguridad(pregunta_1, respuesta_1, pregunta_2, respuesta_2, empleado_id)
        VALUES(:question_1, :answer_1, :question_2, :answer_2, :employeeID)');
        try{
            $query->execute([
                'employeeID'  =>$datos['employeeID'],
                'name'    =>$datos['name'],
                'sourname'=>$datos['sourname'],
                'password'=>$datos['password'],
                'job'     =>$datos['job']
                ]);

              $queryQuestions->execute([
              'question_1'=>$datos['question_1'],
              'answer_1'=>$datos['answer_1'],
              'question_2'=>$datos['question_2'],
              'answer_2'=>$datos['answer_2'],
              'employeeID'=>$datos['employeeID']
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


public function getEmployees()
{
    $items = [];
    try{
        $query = $this->db->connect()->query("SELECT id, nombre, apellidos, puesto_id FROM empleados");
        while($row = $query->fetch())
        {
            $item = new User();
            $item->set('employeeID',$row['id']);
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



}
?>
