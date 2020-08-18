<?php 

class MaterialModel extends Model{
    
    public function __construct(){
        parent::__construct();

    }

    public function insert($data){
        // inseert into database
       
        $result;
        // TODO : verify if this procedures is alrready register
        $isRegisteredProcedure = $this->isRegisteredProcedure($data['employeeID'], $data['materialID']);
        if(!$isRegisteredProcedure){

            $query = $this->db->connect()->prepare('INSERT INTO material_request(employeeID, materialID)
            VALUES(:employeeID,:materialID)');
            try{
                $query->execute([
                    'employeeID'=>$data['employeeID'],
                    'materialID'=>$data['materialID']
                    ]);
                return true;
            }catch(PDOException $e){
                return false;
            }
        }else{
            return -1;
        }


    }

    public function getMaterialRequests()
    {
        $items = [];
        try{
            $query = $this->db->connect()->query("SELECT * FROM material_request");
            while($row = $query->fetch())
            {
                $item = new Material();
                $item->employeeID= $row['employeeID'];
                $item->materialID= $row['materialID'];

                array_push($items, $item);
            }
            return $items;
        }catch(PDOException $e){
            return [];
        }
    }


    public function isRegisteredProcedure($employeeID,$materialID) {
        $array = $this->getMaterialRequests();
        // search for a registered procedures
        if(sizeof($array) == 0 )
        {
          return false;
        }
        if( sizeof($array) > 0) {
          $row = 0;
          $count = 0;
          while ($row < count($array)) {
               if($array[$row]->{'employeeID'} == $employeeID && $array[$row]->{'materialID'} == $materialID ){
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
