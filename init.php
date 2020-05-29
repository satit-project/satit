<?php
define('ROOT_DIR', dirname(__FILE__));
define('ROOT_URL', substr($_SERVER['PHP_SELF'], 0, - (strlen($_SERVER['SCRIPT_FILENAME']) - strlen(ROOT_DIR))));
define('DASHBOARD', ROOT_URL."/resources/view/admin/dashboard.php");
define('COURSE', ROOT_DIR."/resources/view/admin/createCourse.php");
define('NEWCOURSE', ROOT_DIR."/resources/view/admin/newCourse.php");
define('JOB', ROOT_DIR."/resources/view/admin/createJob.php");
define('CONN',ROOT_DIR."/resources/php/conn.php");
define('NOMINA',ROOT_DIR."/resources/Model/Nomina.php");
define('NOMINACONTROLLER',ROOT_DIR."/resources/Controller/NominaController.php");
?>