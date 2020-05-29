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
		        <div class="col-sm-12 col-md-12 col-lg-12">
                    <?php
                    // Connection info. file
                    include 'conn.php';	
                    
                    // Connection variables
                    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

                    // Check connection
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }
                    //datos
                    $pass_anterior=$_POST['password_anterior'];
                    $pass_nueva=$_POST['password_nueva'];
                    $pass_nueva_confirmar=$_POST['password_nueva_confirmar'];
                    $numero_empleado=$_SESSION['numero_empleado'];
                    //
                    // Query sent to database
                    //$result = mysqli_query($conn, "SELECT  * FROM empleados INNER JOIN puestos ON empleados.id_puesto  = puestos.id");
                    $result = mysqli_query($conn,"SELECT password FROM empleados WHERE numero_empleado='$numero_empleado'");
                    
                    // Variable $row hold the result of the query
                    $row = mysqli_fetch_assoc($result);
                    // Variable $hash hold the password hash on database
                    $hash = $row['password'];

                    if (password_verify($pass_anterior, $hash)) {
                        if($pass_nueva==$pass_anterior){
                            echo "<div class='alert alert-success alert-dismissible mt-4' role='alert'>
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span></button>

                            <p>Lo sentimos, su Nueva Contrase&ntilde;a No puede ser igual a la Anterior.</p>
                            <p><a href='javascript:history.back()'> Volver</a></p></div>";
                        }else{
                            if($pass_nueva==$pass_nueva_confirmar){
                                // The password_hash() function convert the password in a hash before send it to the database
                                $passHash = password_hash($pass_nueva, PASSWORD_DEFAULT);
                                
                                // Query
                                $query = "UPDATE empleados SET password='$passHash' WHERE numero_empleado='$numero_empleado'";
                                if (mysqli_query($conn, $query)) {

                                    echo "<div class='alert alert-success alert-dismissible mt-4' role='alert'>
                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span></button>
                                    
                                    <br><h5>Usuario: ".$_SESSION['name']." ".$_SESSION['apellidos']."</h5>
                                    <h4>Su Contrase&ntilde;a se ha cambiado Exitosamente!</h4>
                                    <p>Presione para regresar a Pagina Principal.</p>
                                    <p><a class='alert-link' href=../view/principal.php>Ir a Pagina principal</a></p></div>";
                                } else {
                                    echo "<div class='alert alert-success alert-dismissible mt-4' role='alert'>
                                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                        <span aria-hidden='true'>&times;</span></button>

                                        <p>Lo sentimos, La confirmacion de la Contrase&ntilde;a no coincide.</p>
                                        <p><a href='javascript:history.back()'> Volver</a></p></div>";
                                }
                            }
                        }
                    } else{
                        echo "<div class='alert alert-success alert-dismissible mt-4' role='alert'>
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span></button>

                            <p>Lo sentimos, su Contrase&ntilde;a Anterior No coincide.</p>
                            <p><a href='javascript:history.back()'> Volver</a></p></div>";
                    }
                    ?>
                </div>
            </div>
        </div>
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </body>
</html>