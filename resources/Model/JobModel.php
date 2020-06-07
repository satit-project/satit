<?php 

class JobModel implements Model {
    private $job ="";
    
    
    public function JobModel($job) {
        $this->job = $job;
    }
    
    
    public function checkIfExists($conn) {
         // query to check if job is already saved in database
         $jobCheckDB = "SELECT puesto FROM puestos WHERE puesto = '$this->job' ";
         $result = mysqli_query($conn,$jobCheckDB);
         // count for query result
         $count = mysqli_num_rows($result);             
        if($count >= 1)
        {
            // todo implement this in new file or class
            echo "<div class='alert alert-warning mt-4' role='alert'>
            <p>Este puesto ya existe en la base de datos.</p>
            <a class='btn btn-outline-primary' href='../view/admin/dashboard.php' role='button'>Regresar</a></div>
            </div>";
            return true;
        }
        else{
            echo "<div class='alert alert-success mt-4' role='alert'><h3>Puesto creado.</h3>
				  <a class='btn btn-outline-primary' href='../view/admin/dashboard.php' role='button'>Regresar</a></div>";		
            return false;
        }

    }
    
    
    public function save() {
        $connection = new Connection();
        $connection->connect();
        $conn = $connection->__get('status');             
         // query save to DB employee data
        $query = "INSERT INTO puestos(puesto) VALUES('$this->job')";
        
        if(!$this->checkIfExists($conn)) {     
            // save to database new employee  
            $resultJob = mysqli_query($conn,$query);
            // check result of this query
            $this->checkResult($conn,$resultJob);
            // close connection;
            $conn->close();
        }else{
            echo "<br>Job : save error<br>";
        }
    }
    
    
    
    function checkResult($conn,$resultJob) {
        $statusJob="";
        if(mysqli_error($conn))
        {
            echo "Error: " . $resultJob . "<br>" . mysqli_error($conn);
        }else{
            echo "<br>Job is saved in database succesfuly";
            $statusJob=true;
        }
        return $statusJob;
    }
}

?>