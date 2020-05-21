<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../css/principal.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="../js/Section.js"></script>

</head>

    <title>Principal</title>
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
    

        <!-----------------Contenedor principal----------------->
        <div class="contenedor">
            <div class="contenido-derecha">
			    <!-----------------Logo----------------->
				<div class="logo-container"></div>

					<!-----------------Informacion de empleado----------------->
					<div class="user-info">
						<h2 id="user-name">Emmanuel Nuño Estrella</h2>
						<h2 id="user-code">1208750</h2>
						<h2 id="user-job">operador</h2>
					</div>

					<!-----------------Renglones izquierda----------------->
					<section id="seccion-izquierda">    
						<script>
							// Section.js class scope
							nomina= new section("Nomina","","","","","seccion-izquierda");
							prenomina= new section("Prenomina","","","","","seccion-izquierda");
							vaciones= new section("Vacaciones","","","","","seccion-izquierda");
							nomina.createSection();
							prenomina.createSection();
							vaciones.createSection();
						</script>
					</section>


			</div>

            <!-----------------Renglones derecha----------------->
            <aside class="contenido-izquierda">
			
				<div id="seccion-derecha">    
						<script>
							// Section.js class scope
							constancia= new section("Solicitar constancia","","Aparecerán los datos de esta pantalla",1,["Solicitar"],"seccion-derecha");
							atencion= new section("Solicitar atencion","","",3,["RH","Capacitacion","Finanzas"],"seccion-derecha");
							repuestos= new section("Solicitar repuestos","","","","","seccion-derecha");
							curso= new section("Curso","","",1,["Registrar"],"seccion-derecha");
							sugerencia= new section("Sugerencia","","",1,["Enviar"],"seccion-derecha");
							constancia.createSection();
							atencion.createSection();
							repuestos.createSection();
							curso.createSection();
							sugerencia.createSection();
						</script>
					</div>

		</aside>
		</div>
		<br>
		<div>

		<button type="button" class="btn btn-secondary col-2">Salir</button>

		</div>

</body>
</html>