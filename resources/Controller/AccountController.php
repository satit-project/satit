<?php
include_once("../../factory.php");
$option = $_REQUEST["option"];
echo "<br> option:".$option."<br>";
// todo check-login credentials
switch($option)
{
    case "up":
        echo "create account";
        include_once ACCOUNTMODEL;
        $name = $_REQUEST['name'];
        $sourname = $_REQUEST['sourname'];
        $employeeCode = $_REQUEST['employeeCode'];
        $job = $_REQUEST['job'];
        $password = $_REQUEST['password'];
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $question1 = $_REQUEST['Seg_pregunta_1'];
        $question2 = $_REQUEST['Seg_pregunta_2'];
        $answer1 = $_REQUEST['R_pregunta_1'];
        $answer2 = $_REQUEST['R_pregunta_2'];
        $account = new AccountModel( $name, $sourname, $passwordHash,
                                    $employeeCode, $job, $question1,
                                    $question2, $answer1, $answer2);
        $account::printObject();
        $account->save();

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