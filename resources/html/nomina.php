<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="../css/general.css" rel="stylesheet" type="text/css">
    <link href="../css/template.css" rel="stylesheet" type="text/css">
	<link href="../css/nomina.css" rel="stylesheet" type="text/css">
    <script src="../js/creaRenglones.js"></script>
    <script src="../js/nomina.js"></script>
	<!-- formato de los botones de la pantalla cuando no se ha iniciado sesion-->
	<link href="../css/sinAcceso.css" rel="stylesheet" type="text/css">
    <title>Nomina</title>
</head>
<body>

	  <div class="contenido">
    <!-- Barra superior-->
        <div class="top-barr"></div>
    </section>
        <!-- Logo de usuario y Nombre-->
        <section>
            <div class="user-logo-container">
                <img class="user-logo"></img>
            </div>
    
            <div class="numero-empleado-container">
                <h2>0001233</h2>
            </div>
        </section>


        <section id="seccion-renglones">    
            <!-- Seccion para mostrar la nomina-->
                <script>
                    var labels = ["Semana","Pago"]
                    creaRenglones(labels);
                    addText();
                </script>

        </section>



        <!--Boton continuar -->
        <section>
            <a href="../php/logout.php"class="btn btn-salir">Salir</a>
            <a href="menu.php"class="btn btn-continuar">Continuar</a>

        </section>


    </div>  
</body>
    <!-- Barra inferior-->
    <footer class="footer">

    </footer>  

</html>
