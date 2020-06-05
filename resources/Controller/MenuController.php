<?php 
    include_once ("../../factory.php");
    $option= $_REQUEST['option'];
    //$material= $_REQUEST['material'];
    //$departamento= $_REQUEST['departamento'];
    //$sugerencia= $_POST['sugerencia'];
    echo "OPTION:".$option."<br>";

if( isset($_REQUEST['option'])){
        $option = $_REQUEST['option'];
        $isAdmin =false;
   

/*menu admin*/
if($isAdmin )
{
    switch($option)
    {
        case 'nomina':
        break;
        case 'prenomina':
        break;
        case 'vacaciones':
        break;
        case 'cartaDeTrabajo':
        break;
        case 'material':
        break;
        case 'atencion':
        break;
        case 'curso':
        break;
        case 'encuesta':
        break;
        case 'sugerencias':
        break;
        case 'cuentas':
        break;
        case 'sesion':
        break;
        default:
           echo 'Intenta de nuevo con otra opcion';
       break;
    }
   
}
else {
    switch($option)
{
    case "cartaDeTrabajo":
        $empleado=$_REQUEST['numero_empleado'];
        $cartaTrabajo = new CartaTrabajoModel($empleado);
        $cartaTrabajo->printModel();
        if($cartaTrabajo->save())
        {
            echo'se solicito carta de trabajo';
        }
   
    break;
    case "material":
        echo'se solicito  material';
    break;
    case "atencion":
        echo'se solicito atencion';

    break;
    case "curso":
        echo "Quedaste inscrito en el curso";
    break;
    case "encuesta":
        echo'gracias por contestar la encuesta';

    break;
    case "sugerencias":
        echo'gracias por enviar tus sugerencias';

    break;
    case "sesion":
    break;
    default:
       echo 'Intenta de nuevo con otra opcion';
   break;
}

}
}else{
    echo "erro<br>";
    echo "puesto: ".$_REQUEST['puesto']. "<br>";
}
 

?>