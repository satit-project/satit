<?php 
include_once ("../../init.php");
include_once CONNECTION;


class CartaTrabajoModel implements Model {
   
    private $id_empleado ="";



    function CartaTrabajoModel($id_empleado) {
        $this->id_empleado=$id_empleado;
    }

    function printModel() {
      echo "Carta Trabajo: Function print Object  <br>";
      echo " ID empleado : $this->id_empleado <br>";

    }

    function save(){
        $connection = new Connection();
        $conn = $connection->connect();
        $query = "INSERT INTO carta_de_trabajo(id_empleado) VALUES ('$this->id_empleado')";
       if( mysqli_query($conn,$query))
       {
           echo "<br>se guardo correctamente";
       }else{
           echo "error al guardar en BD";
       }
        return $query;
    }


    /*GETTERS AND SETTERS */

    function getTitle() {
        return $this->title;
    }
    
    function getDescription() {
        return $this->description;
    }
    function getDate() {
        return $this->date;
    }
    function getHour() {
        return $this->hour;
    }

}




?>