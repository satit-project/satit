<?php 

class Permiso extends Model{
    
    public function __construct(){
        parent::__construct();

    }

    public function insert($data){
        // inseert into database

            $query = $this->db->connect()->prepare('INSERT INTO permisos(employeeID, fecha, hora)
            VALUES(:employeeID,:fecha, hora)');
            try{
                $isRegisteredProcedure = $this->isRegisteredProcedure($data['employeeID'], $data['fecha']);
                echo $isRegisteredProcedure."<br>";
                if(!$isRegisteredProcedure){
                    $query->execute([
                        'employeeID'=>$data['employeeID'],
                        'fecha'=>$data['fecha']
                        ]);
                    return true;
                }
            }catch(PDOException $e){
                return false;
            }
        }


    public function getRequests()
    {
        $items = [];
        try{
            $query = $this->db->connect()->query("SELECT * FROM permisos");
            while($row = $query->fetch())
            {
                $item = new Material();
                $item->employeeID= $row['employeeID'];
                $item->materialID= $row['materialID'];
                array_push($items, $item);
            }
            return $items;
        }catch(PDOException $e){
            echo "error en conexion";
            return [];
        }

    }


    public function isRegisteredProcedure($employeeID,$fecha) {
        $array = $this->getRequests();
        // search for a registered procedures
        if(sizeof($array) == 0 )
        {
          return false;
        }
        if( sizeof($array) > 0) {
          $row = 0;
          $count = 0;
          while ($row < count($array)) {
               if($array[$row]->{'employeeID'} == $employeeID && $array[$row]->{'fecha'} == $fecha ){
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
          echo "<br>Is registred procedure";
          return true;
        }

    }



}
?>
