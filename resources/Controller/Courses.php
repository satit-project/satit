<?php
include ("../../resources/php/Conect.php");
include ("../Model/Course.php");


// conect to dabatase
$conect = new Connect($dbhost,$dbuser,$dbpass,$dbname);
$conect->chekConection();

if($conect) {
    
    $option = $_POST['option'];

    switch($option)
    {
        case '1' :
            $title = $_POST['titulo'];
            $description = $_POST['descripcion'];
            $date = $_POST['descripcion'];
            $hour = $_POST['descripcion'];
            $curso = new Course($title, $description, $date, $hour);
            if($curso)
            {
                $curso->printObject();
                $curso->save();
                echo '\n se creo correctamente el curso\n';

            }
            else{
                echo '\nerror al crear el curso\n
                      Intentalo de nuevo';
            }
        break;
        
        case '2':
            echo '\n Opcion 2 seleccionada';
        break;
        
        default:
            echo '\n Opcion desconocida \n';
        break;
            
    }

}
else
{
    echo 'Error en conexion';
    $conect->closeConnection();
}

?>