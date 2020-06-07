<?php
include ("../../resources/php/Connection.php");
include ("../Model/Course.php");


// conect to dabatase
$connection = new Connection();
if( !$connection) {
    
    echo 'Error en conexion';
    die("Connection failed: " . mysqli_connect_error());

}
else
{

    function menu ()
    {

   
    $option = $_POST['option'];

    switch($option)
    {
        case 'alta' :
            $title = $_POST['title'];
            $description = $_POST['description'];
            $date = $_POST['date'];
            $hour = $_POST['hour'];
            $curso = new Course($title, $description, $date, $hour);
            $query = $curso->save();
            $conn = mysqli_connect($connection->__get('dbhost'),
                                   $connection->__get('dbuser'),
                                   $connection->__get('dbpass'),
                                   $connection->__get('dbname')
                                );

            if(mysqli_query($conn, $query))
            {
                return;

              
            }   
            else{
          
                      echo '<br> Error al crear el curso <br>
                      Intentalo de nuevo <br>';
                      die("<br>Connection failed: ". mysqli_connect_error());
            }
        
        break;
        
        case 'baja':
            echo '<br> Opcion 2 seleccionada';
        break;
        
        default:
            echo '<br>Opcion desconocida \n';
        break;
            
    }
}

}

?>