<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <link href="../css/empleadoInfo.css" rel="stylesheet" type="text/css">
		<!-- formato de los botones de la pantalla cuando no se ha iniciado sesion-->
		<link href="../css/sinAcceso.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="top-block"></div>
        <div class="img-container">
            <img src="../img/test.jpg" alt="Avatar" class="logo" style="width: 200px">
        </div>
        <div class="info-container">
            <div id="numEmpleado">1208793</div>
        </div>
            <div class="num">
                <input type="text" placeholder="DATO" name="data1" disabled>
            </div>
            <div class="num">
                <input type="text" placeholder="$1200" name="data1" disabled>
            </div>
        </div>

        <div>
            <button id="boton" type="submit">CONTINUAR</button>
        </div>
    </body>
</html>