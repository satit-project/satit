<?php

class AccountModel implements Model {

    private $name="";
    private $sourname="";
    private $employeeCode="";
    private $jobCode="";
    private $password="";
    private $question1="";
    private $question2="";
    private $answer1="";
    private $answer2="";


    function AccountModel($name, $sourname, $employeeCode, $jobCode,$password,
                       $question1,
                        $question2,
                        $answer1,
                        $answer2) {

                $this->name = $name;
                $this->sourname = $sourname;
                $this->employeeCode = $employeeCode;
                $this->jobCode = $jobCode;
                $this->password = password_hash($password);
                $this->question1 = $question1;
                $this->question2 = $question2;
                $this->$answer1 = $answer1;
                $this->$answer2 = $answer2;

    }


    public function save() {
        $conn = new Connection();
        
        // save to DB employee data
        $queryEmployees = "INSERT INTO emplados(
                            nombre, apellidos, 
                            numero_emplado, password,
                            id_puesto)
                            
                            VALUES($this->name,
                            $this->sourname,
                            $this->employeeCode,
                            $this->password,
                            $this->jobCode)
                            ";
        $resultEmployees = mysqli_query($conn,$queryEmployees);
        // close connection;
        $conn->close();
        // save securityQuestions
        $resultQuestions = saveSecurityQuestions();
        
        return [$resultEmployees, $resultQuestions];
    }
    
    public function saveSecurityQuestions() {
        $conn = new Connection();
         
         // save to DB security questions
        $queryQuestions = "INSERT INTO preguntas_seguridad(
            pregunta_1, respuesta_1, 
            pregunta_2,respuesta_2,
            id_empleado)
            
            VALUES( $this->question1,
            $this->answer1,
            $this->question2,
            $this->answer2,
            $this->employeeCode
            ";

        $resultQuestions = mysqli_query($conn,$queryQuestions);
        // close connection;
        $conn->close();
        
        return  $resultQuestions;
    }
                   
    function printObject ()
    {
      echo "Course: Funcion print Objetc <br>";
      echo " name : $this->name <br>";
      echo " sourname : $this->sourname <br>";
      echo " employee code : $this->employeeCode <br>";
      echo " password : $this->password <br>";
      echo " jobCode : $this->jobCode <br>";
    }


}


?>