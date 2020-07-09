<?php
class AtencionModel extends Model{

    public function __construct(){
        parent::__construct();

    }


    public function insert($datos) {
        $query = $this->db->connect()->prepare('INSERT INTO cita(employeeID, departamento)
        VALUES(:employeeID, :departamento)');
        try {
            $registredP = $this->isRegisteredProcedure($datos['employeeID']);
            echo $registredP."</br>";
          if(!$registredP) {

               $query->execute(['employeeID' => $datos['employeeID'],'departamento'=> $datos['department']]);
                    echo "SE GENERO Atencion en". $datos['department']."<br>";
          }

        } catch (PDOException $e) {
          echo "NO SE GENERO ATENCION EN ".$datos['department']."<br>";

        }
    }

    public function getAppointments() {
      $items = [];
      try {
        $query = $this->db->connect()->query("SELECT * FROM carta_de_trabajo");
        while ($row = $query->fetch()) {
          $item = new WorkLetter();
          $item->department = $row['department'];
          $item->employeeID     = $row['employeeID'];
          array_push($items, $item);
        }
          return $items;
      } catch (PDOException $e) {
        echo "error en conexion";
          return [];
      }

    }

    public function isRegisteredProcedure($employeeID) {
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
               if($array[$row]->{'employeeID'} == $employeeID && $array[$row]->{'status'} == 0 ){
                    echo "found!<br>";
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
          echo "Is registred letter";
          return true;
        }

    }


  }

?>
