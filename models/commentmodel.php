<?php 

class CommentModel extends Model{
    
    public function __construct(){
        parent::__construct();

    }

    public function insert($data){
        // inseert into database
       
        $result;
        // TODO : verify if this procedures is alrready register
        $isRegisteredProcedure = $this->isRegisteredProcedure($data['employeeID'], $data['comment']);
        if(!$isRegisteredProcedure){

            $query = $this->db->connect()->prepare('INSERT INTO comments(employeeID, comment)
            VALUES(:employeeID,:comment)');
            try{
                $query->execute([
                    'employeeID'=>$data['employeeID'],
                    'comment'=>$data['comment']
                    ]);
                return true;
            }catch(PDOException $e){
                echo "<br>" . $e->getMessage();
                return false;
            }
        }else{
            return -1;
        }


    }

    public function getComments()
    {
        $items = [];
        try{
            $query = $this->db->connect()->query("SELECT * FROM comments");
            while($row = $query->fetch())
            {
                $item = new Comment();
                $item->employeeID= $row['employeeID'];
                $item->commentDate= $row['commentDate'];

                array_push($items, $item);
            }
            return $items;
        }catch(PDOException $e){
            return [];
        }
    }


    public function isRegisteredProcedure($employeeID,$comment) {
        $array = $this->getComments();
        // search for a registered procedures
        if(sizeof($array) == 0 )
        {
          return false;
        }
        if( sizeof($array) > 0) {
          $row = 0;
          $count = 0;
          // Establecer la zona horaria predeterminada a usar. Disponible desde PHP 5.1
          date_default_timezone_set('America/Tijuana');
          $today = date("Y-m-d");

          while ($row < count($array)) {
              echo  '<br>'.$array[$row]->{'commentDate'}.' today '.$today ;
               if($array[$row]->{'employeeID'} == $employeeID && $array[$row]->{'commentDate'} == $today){
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
