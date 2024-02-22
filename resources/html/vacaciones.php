<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/general.css" rel="stylesheet" type="text/css">
    <link href="../css/template.css" rel="stylesheet" type="text/css">
    <script src="../js/creaRenglones.js"></script>
	<!-- formato de los botones de la pantalla cuando no se ha iniciado sesion-->
	<link href="../css/sinAcceso.css" rel="stylesheet" type="text/css">
	
    <title>Vacaciones</title>
</head>
<body>
    <div class="contenido">
        <!-- Barra superior-->
        <section>
            <div class="top-barr"></div>
        </section>

        <!-- Logo de usuario y Nombre-->
        <section>
            <div class="user-logo-container">
                <img class="user-logo"></img>
            </div>
    
            <div class="numero-empleado-container">
                <h2>1208750</h2>
            </div>
        </section>
        
        <!-- Seccion para mostrar vacaciones-->
        <section id="seccion-renglones">
            <script>
                  var labeles =["Periodo","Dias"]
                  var vacacionesContent =["# 2","10"]
                 creaRenglones(labeles,labeles);
                 agregarContenidoDemoPrenomina(vacacionesContent,labeles);
            </script>
        </section>

        <!--Boton continuar-->
        <section>
            <a href="../html/menu.php"class="btn btn-salir">Menu</a>
            <a href="menu.php"class="btn btn-continuar">Continuar</a>
        </section>
    </div>
</body>
<!-- Barra inferior-->
<footer class="footer">

</footer>
</html>