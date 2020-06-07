<?php

class AccountModel implements Model {

    public $employeeID="";
    public $name="";
    public $sourname="";
    public $password="";
    public $jobID="";
    
    function AccountModel($employeeID, 
                          $name, 
                          $sourname, 
                          $password,
                          $jobID) {

                $this->employeeID = $employeeID;
                $this->name = $name;
                $this->sourname = $sourname;
                $this->password = $password;
                $this->jobID= $jobID;

    }
    
    
    private function checkIfExists($conn){
        // query to check if the user id already saved in database
        $employeeCheckDB = "SELECT * FROM empleados WHERE id = 'this->employeeID' ";
        $result = mysqli_query($conn,$employeeCheckDB);
        // count for query result
        $count = mysqli_num_rows($result);
        
        if($count >= 1)
        {
            return true;
        }
        else{
            return false;
        }
    }
    
    
    public function save() {
        $connection = new Connection();
        $connection->connect();
        $conn = $connection->__get('status');             
         // query save to DB employee data
        $query = "INSERT INTO empleados(id,nombre,apellidos,password,puesto_id) 
                         VALUES('$this->employeeID','$this->name','$this->sourname',
                                '$this->password','$this->jobID')";
                         
                         
        if(!$this->checkIfExists($conn)) {     
            // save to database new employee  
            $resultEmployees = mysqli_query($conn,$query);
            // check result of this query
            $this->checkResult($conn,$resultEmployees);
            // close connection;
            $conn->close();
        }else{
            echo "<br>Account : save error<br>";
        }
   

    
    }
    
    
    
    function checkResult($conn,$resultEmployees) {
        
        $statusEmployee="";
        if(mysqli_error($conn))
        {
            echo "Error: " . $resultEmployees . "<br>" . mysqli_error($conn);
            $statusEmployee=false;
        }else{
            echo "<br>Account is saved in database succesfuly";
            $statusEmployee=true;
        }
        return $statusEmployee;
    }
    
    



    
}

?>