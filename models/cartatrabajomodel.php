<?php
include_once('cartaTrabajo.php');

class CartaTrabajoModel extends Model{

    public function __construct(){
        parent::__construct();

    }


    public function insert($datos) {
        $query = $this->db->connect()->prepare('INSERT INTO carta_de_trabajo(empleado_id, estatus)
        VALUES(:empleado_id, :estatus)');
        try {
          if(!$this->isRegisteredProcedure($datos['employeeID'])) {
               $query->execute(['empleado_id' => $datos['employeeID'],'estatus'=> 0]);
                    echo "SE GENERO CARTA DE TRABAJO";
          }

        } catch (PDOException $e) {

        }
    }

    public function getLetters() {
      $items = [];
      try {
        $query = $this->db->connect()->prepare("SELECT * FROM carta_de_trabajo");
        while ($row = $query->fetch()) {
          $item = new WorkLetter();
          $item->$employeeID = $row['empleado_id'];
          $item->status     = $row['estatus'];
          $item->dateRegistered       = $row['fecha'];
          array_push($items, $item);
        }
        return $items;
      } catch (PDOException $e) {
          return [];
      }

    }

    public function isRegisteredProcedure($employeeID) {
        $array = $this->getLetters();
        // search for a registered WorkLetter on hold
        if(sizeof($array) > 0
           && array_search($employeeID,$array)
           && array_search(0,$array))
        {
            return true;

        }else {
          echo "There's no letters";
          return false;
        }

    }


  }

?>
