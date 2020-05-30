<?php 

class Nomina {
    private $employee="";
    private $payroll="";


    public function __construct($employee,$payroll)
    {
        $this->employee = $employee;
        $this->payroll = $payroll;
    }


    public function getNomina(){
        return [$this->employee, $this->payroll];
    }
}
?>