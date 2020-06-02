<?php 
include_once "../../../factory.php";

class Course implements ModelClass  {
    private $title ="";
    private $description="";
    private $date="";
    private $hour="";

    function Course($title, $description, $date, $hour)
    {
        $this->title=$title;
        $this->description=$description;
        $this->date=$date;
        $this->hour=$hour;
    }

    function printObject ()
    {
      echo "Course: Funcion print Objetc <br>";
      echo " titulo : $this->title <br>";
      $titulo = $this->getTitle();
      echo $titulo;
    }

    function save(){
        $connection = new Connection();
        $conn = $connection->connect();
        $query = "INSERT INTO cursos(titulo, descripcion, fecha, horario) 
                  VALUES (  '$this->title', 
                            '$this->description',
                            '$this->date',
                            '$this->hour'
                           )";
        mysqli_query($conn,$query);
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