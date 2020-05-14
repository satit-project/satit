<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../css/principal.css" rel="stylesheet" type="text/css">
    <script src="../js/creaRenglones.js"></script>
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
            <div class="contenido_derecha">
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
							var labels = ["Nomnia","Prenomina","Vacaciones"]
							crearSecciones(labels,"seccion-izquierda");
						</script>
					</section>


			</div>

            <!-----------------Renglones derecha----------------->
            <aside class="contenido-izquierda">
			
				<div id="seccion-derecha">    
						<script>
							var labels = ["Solicitar constancia",
										  "Solicitar una atencion",
										  "Solicitar respuestos",
										  "Cursos",
										  "Sugerencias"]
							crearSecciones(labels,"seccion-derecha");
						</script>
					</div>

		</aside>
        </div>
</body>
</html>