<?php
include_once "init.php";

include_once COURSEMODEL;
include_once CONNECTION;
include_once NOMINAMODEL;


/*******************************************
 * 
 *  TEST FOR MODELS AND CONTROLLERS
 * 
 * *****************************************
 */

/* Test to save new course in db :  working */
$courseTest = new Course("Nuevo curso","Ejemplo de curso","2020-06-20","10:00 AM - 12:00PM");
if($courseTest != null)
{
    echo "<br>se creo curso";
    echo print_r($courseTest);
    if($courseTest->save())
    {
        echo "<br>Se guardo el curso en la base de datos";
    }
}

/* Test to save new nomina in db :  working */






?>