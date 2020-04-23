<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link href="resources/js/menu.js">
        <link href="../css/general.css" rel="stylesheet" type="text/css">
        <link href="../css/menu.css" rel="stylesheet" type="text/css">
        <link href="../css/ctrabajo.css" rel="stylesheet" type="text/css">

        <link href="../css/menuTransition.css" rel="stylesheet" type="text/css">
        <script src="../js/menu.js."></script>
		<!-- formato de los botones de la pantalla cuando no se ha iniciado sesion-->
		<link href="../css/sinAcceso.css" rel="stylesheet" type="text/css">
		
		<title>Menu Principal</title>
		
    </head>
    <body>
	<!--verifica que realmente tengas sesion iniciada-->
	<?php
    if (isset($_SESSION['loggedin'])) {  
    }
    else {
        echo "<div class='alert alert-danger mt-4' role='alert'>
        <a class='titulo-sin-acceso'>Es necesario iniciar sesion en la pagina de Satit para acceder a esta pagina.</a>
        <p><a href='../../index.html' class='boton-para-login'>Iniciar sesion aqui!!</a></p></div>";
        exit;
    }
    // checking the time now when check-login.php page starts
    $now = time();           
    if ($now > $_SESSION['expire']) {
        session_destroy();
        echo "<div class='alert alert-danger mt-4' role='alert'>
        <a class='titulo-sin-acceso'>Su sesion a expirado!!</a>
        <p><a href='../../index.html'class='boton-para-login'>Iniciar sesion aqui!!</a></p></div>";
        exit;
        }
    ?>
	<!------------------------------------------------------------------>
        <div class="container">

            <!-- Menu Principal-->
            <section class="seccion" id="seccion1">
                <div class="menu">
                    <div class="row-menu" >
                        <a href="nomina.php"class="botones boton-menu nomina">Nomina</a>
                        <a href="prenomina.php"class="botones boton-menu prenomina">Prenomina</a>
                        <a href="vacaciones.php"class="botones boton-menu vacaciones">vacaciones</a>
                        <a href="ctrabajo.php"class="botones boton-menu c_trabajo">C.Trabajo</a>
                        <a href="encuestas.php"class="botones boton-menu encuesta">encuestas</a>
                        <a href="#seccion2"class="botones boton-menu mas">Mas..</a>
                    </div>
                </div>
            </section>

            <!-- Menu Secundario-->
            <section id="seccion2"class="seccion">
                <div class="menu">
                    <div class="row-menu" >
                        <a href="#" class="botones boton-menu constancia">Constancia</a>
                        <a href="cita.php" class="botones boton-menu citas">Cita</a>
                        <a href="#" class="botones boton-menu sugerencias">Sugerencias</a>
                        <a class="botones boton-menu cursos">Cursos</a>
                        <a href="#" class="botones boton-menu repuestos">Repuestos</a>
                        <a href="#seccion1" class=" botones boton-menu regresar">Regresar</a>
                    </div>
                    
					<div class="row-menu" >
						<a href="../php/logout.php" class="boton_return regresar">Salir</a>
					</div>
				
                </div>
            </section>
			
    </body>
</html>