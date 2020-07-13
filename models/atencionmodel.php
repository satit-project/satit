<?php
include_once('appointment.php');
class AtencionModel extends Model{

    public function __construct(){
        parent::__construct();

    }


    public  function insert($datos) {
        $query = $this->db->connect()->prepare('INSERT INTO cita(employeeID, departamento_id)
        VALUES(:employeeID, :departamento_id)');
        try {
            $registredP = $this->isRegisteredProcedure($datos['employeeID'], $datos['departamento_id']);
            echo $registredP."</br>";
          if(!$registredP) {

               $query->execute(['employeeID' => $datos['employeeID'],'departamento_id'=> $datos['departamento_id']]);
                return true; 
          }

        } catch (PDOException $e) {
                return false;
        }
    }

    public function getAppointments() {
      $items = [];
      try {
        $query = $this->db->connect()->query("SELECT * FROM cita ");
        while ($row = $query->fetch()) {
          $item = new Appointment();
          $item->department = $row['departamento_id'];
          $item->employeeID     = $row['employeeID'];
          $item->status = $row['estatus'];
          array_push($items, $item);
        }
          return $items;
      } catch (PDOException $e) {
        echo "error en conexion";
          return [];
      }

    }

    public function isRegisteredProcedure($employeeID, $departmentID) {
        $array = $this->getAppointments();
        // search for a registered WorkLetter on hold
        if(sizeof($array) == 0 )
        {
          return false;
        }
        if( sizeof($array) > 0) {
          $row = 0;
          $count = 0;
          while ($row < count($array)) {
               if($array[$row]->{'employeeID'} == $employeeID && $array[$row]->{'status'} == 0 && $array[$row]->{'department'} == $departmentID ){
                    echo "ya tiene una cita activa en este departamento!<br>";
                    $count++;
               }
              $row++;
            }
            if($count == 0)
            {
              return false;
            }else {
              return true;
            }
          }
        else {
          echo "Is registred procedure";
          return true;
        }

    }


  }

?>
