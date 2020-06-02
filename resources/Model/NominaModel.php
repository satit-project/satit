<?php 
include_once "../../../factory.php";

class NominaModel implements ModelClass{
    private $employee="";
    private $payroll="";
    private $hours="";
    private $date="";


    public function __construct($employee,$payroll,$hours,$date)
    {
        $this->employee = $employee;
        $this->payroll = $payroll;
        $this->hours = $hours;
        $this->date = $date;
    }


    public function getNomina(){
        return [$this->employee, $this->payroll];
    }

    public function save()
    {
        $conn = new Connection();
        $query = "INSERT INTO nomina (empleado, )
                  VALUES(

                  )";
    }
}
?>