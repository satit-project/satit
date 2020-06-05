<?php
include_once("../../factory.php");
$option = $_REQUEST["option"];
// todo check-login credentials
switch($option)
{
    case "up":
        echo "create account";
        include_once ACCOUNTMODEL;
        $employeeCode = $_REQUEST['numero_empleado'];
        $name = $_REQUEST['nombre'];
        $sourname = $_REQUEST['apellidos'];
        $job = $_REQUEST['puesto'];
        
        $account = new AccountModel();

    break;
    case "update":
        echo "update account";
    break;
    case "up":
        echo "down account";
    break;
    default:
    echo "opcionInvalida";
    break;
}




?>