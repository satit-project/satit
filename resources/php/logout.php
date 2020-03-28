/* Destroy current user session */

<?php
session_start();
session_unset($_SESSION['numero_empleado']);
session_destroy();

//te envia a la pagina de login despues de cerrar sesion
header('location: ../../index.html');
?>