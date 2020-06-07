<?php

class SecurityQuestionModel implements Model{
    public $question1="";
    public $answer1="";
    public $question2="";
    public $answer2="";
    public $employeeID="";

    
    
    function SecurityQuestionModel($question1,
                              $answer1,
                              $question2,
                              $answer2,
                              $employeeID) {
                                  $this->question1 = $question1;
                                  $this->answer1 = $answer1;
                                  $this->question2 = $question2;
                                  $this->answer2 = $answer2;
                                  $this->employeeID = $employeeID;
    }
    
    
    
    public function checkIfExists($conn){
        // query to check if the user id already saved in database
        $questionsCheckDB = "SELECT * FROM preguntas_seguridad WHERE empleado_id = 'this->employeeID' ";
        $result = mysqli_query($conn,$questionsCheckDB);
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
    
    
    public function save(){ 
        // new connection to db       
        $connection = new Connection();
        $conn = $connection->connect();
        $conn = $connection->__get('status');             
        $queryQuestions = "INSERT INTO preguntas_seguridad(pregunta_1, respuesta_1, pregunta_2, respuesta_2, empleado_id)
                                  VALUES('$this->question1', '$this->answer1',
                                         '$this->question2', '$this->answer2','$this->employeeID')";
            
            if(!$this->checkIfExists($conn)) {   
                // save to database new security questions  
                $resultQuestions = mysqli_query($conn, $queryQuestions);
                // check result of this  query
                $this->checkResult($conn,$resultQuestions);
                // close connection;
                $conn->close();
            }else{
                echo "<br>Security questions: save error<br>";;
            }
    }
    
    function checkResult($conn,$resultQuestions) {
        
        $statusQuestions="";
        if(mysqli_error($conn))
        {
            echo "Error: " . $resultQuestions. "<br>" . mysqli_error($conn);
            $statusQuestions=false;
        }else{
            echo "<br>Questions where saved in database succesfuly";
            $statusQuestions=true;
        }
        return $statusQuestions;
    }
    

}

?>