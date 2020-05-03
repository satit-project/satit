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
    <script src="../js/creaRenglones.js"></script>
	<!-- formato de los botones de la pantalla cuando no se ha iniciado sesion-->
	<link href="../css/sinAcceso.css" rel="stylesheet" type="text/css">
    <title>Carta de trabajo</title>
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
            <h2>
				<?php
				//muestra nombre y numero de empleado
				echo $_SESSION['name'].' '.$_SESSION['numero_empleado'];
				?>
			</h2>
            </div>
        </section>

        
        <!-- Seccion para mostrar datos de la carta de trabajo-->
        <div id="seccion-renglones">
            <script>
                // Nombres de labels que seran asignados
                var labels = ["Nombre","Fecha de Ingreso","Puesto"]
            creaRenglones(labels);
            </script>
        </div>

        <!--Boton continuar, cancelar y salir-->
 
	   <section class="seccion-botones">
             <div class="botones-child">
                 <a href="../php/logout.php"class="btn btn-salir">Salir</a>
            </div>
             <div class="botones-child">
             <a href="menu.php"class="btn btn-cancelar">Cancelar</a>
            </div>
            <div class="botones-child">
             <a href="menu.php"class="btn btn-continuar">Continuar</a>
             </div>
	   </section>


    </div>    
</body>
<!-- Barra inferior-->
<footer class="footer">
</footer>
</html>