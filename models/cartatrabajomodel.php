<?php
include_once('workLetter.php');

class CartaTrabajoModel extends Model{

    public function __construct(){
        parent::__construct();

    }


    public function insert($datos) {
        $query = $this->db->connect()->prepare('INSERT INTO carta_de_trabajo(empleado_id, estatus)
        VALUES(:empleado_id, :estatus)');
        try {
            $registredP = $this->isRegisteredProcedure($datos['employeeID']);
            echo $registredP."</br>";
          if(!$registredP) {

               $query->execute(['empleado_id' => $datos['employeeID'],'estatus'=> 0]);
               return true;
          }

        } catch (PDOException $e) {
              return false;

        }
    }

    public function getLetters() {
      $items = [];
      try {
        $query = $this->db->connect()->query("SELECT * FROM carta_de_trabajo");
        while ($row = $query->fetch()) {
          $item = new WorkLetter();
          $item->employeeID = $row['empleado_id'];
          $item->status     = $row['estatus'];
          $item->dateRegistered = $row['fecha'];
          array_push($items, $item);
        }
          return $items;
      } catch (PDOException $e) {
        echo "error en conexion";
          return [];
      }

    }

    public function isRegisteredProcedure($employeeID) {
        $array = $this->getLetters();
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
