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
    <link href="../css/ctrabajo.css" rel="stylesheet" type="text/css">
    <script src="../js/encuestas.js"></script>
	<!-- formato de los botones de la pantalla cuando no se ha iniciado sesion-->
	<link href="../css/sinAcceso.css" rel="stylesheet" type="text/css">
    <title>Carta de trabajo</title>
</head>
<body>

    <div class="contenido">
        <!-- Barra superior-->
        <section>
            <div class="top-barr"></div>
        </section>

        <!-- Logo de usuario y Nombre -->
        <section>
            <div class="user-logo-container">
                <img class="user-logo"></img>
            </div>
    
            <div class="numero-empleado-container">
                <h2>0001233</h2>
            </div>
        </section>

        
        <!-- Seccion para mostrar datos de la carta de trabajo-->
        <div id="seccion-renglones">
            <script>
                // Nombres de labels que seran asignados
                var labels = 
                ["¿Que tramite realizo?",
                "Seleccione una opcion",
                "volveria usar el sistema",
                "le gustaria dejar sugerencias?",
                "Recomendaria el sistema"];
            crearEncuesta(labels);
            </script>
        </div>

        <!--Boton continuar-->
        <div >
            <a href="../php/logout.php"class="btn btn-salir">Salir</a>
            <a href="menu.php"class="btn btn-continuar">Continuar</a>
        </div>

    </div>    
</body>
<!-- Barra inferior-->
<footer class="footer">

</footer>
</html>