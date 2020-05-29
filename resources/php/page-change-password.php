<?php
session_start();
?>
<!doctype html>
<html lang="en">
	<head>		
    	<title>Preguntas de seguridad</title>
    	<!-- Required meta tags -->
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    	<!-- Bootstrap CSS -->
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
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
	        <div class="row">
		        <div class="col-sm-12 col-md-6 col-lg-6">
        
                <h2>Cambiar Contrase&ntilde;a</h2><hr />
                <h5>Usuario:</h5>
                <h6><?php  echo$_SESSION['name']." ".$_SESSION['apellidos']?></h6>
                        
                <form action='change-password.php' method='post'>
                    <a>Contrase&ntilde;a Actual:</a>
                    <div class='form-group'>				
                            <input type='password' class='form-control' name='password_anterior' placeholder='Ingrese su contrase&ntilde;a actual' required value=''>			
                    </div>
                    <a>Nueva:</a>
                    <div class='form-group'>				
                        <input type='password' class='form-control' name='password_nueva' placeholder='Ingrese su nueva contrase&ntilde;a' required >			
                    </div>
                    <a>Confirme Nueva Contrase&ntilde;a:</a>
                    <div class='form-group'>				
                        <input type='password' class='form-control' name='password_nueva_confirmar' placeholder='Confirme la nueva contrase&ntilde;a' required>			
                    </div>
                    <button type='submit' class='btn btn-success btn-block'>Cambiar Contrase&ntilde;a</button>
                </form>
            </div>
            
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h3>Pasos a seguir</h3><hr />
                <p>1. - En el primer campo ingrese su Contrase&ntilde;a actual.</p>
                <p>2. - En el segundo ingrese la nueva.</p>
                <p>4. - En el tercer campo ingrese nuevamente la nueva Contrase&ntilde;a.</p>
            </div>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </body>
</html>