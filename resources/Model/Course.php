<?php 


class Course{
    private $title;
    private $description;
    private $date;
    private $hour;

    function __construct($date,$title,$description,$hour)
    {
        $this->$title=$title;
        $this->$description=$description;
        $this->$date=$date;
        $this->$hour=$hour;
    }

    function printObject ()
    {
        echo $this->title;
        echo $this->description;
        echo $this->date;
        echo $this->hour;
    }

    function save(){
        $query = "INSERT INTO cursos(title, description, date, hora) 
                  VALUES ( '$this->title', 
                           '$this->description',
                           '$this->date',
                           '$this->hour'
                           )";
    }

}



?>