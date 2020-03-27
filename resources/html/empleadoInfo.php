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
	
	
        <div class="top-block"></div>
        <div class="img-container">
            <img src="../img/test.jpg" alt="Avatar" class="logo" style="width: 200px">
        </div>
        <div class="info-container">
            <div id="numEmpleado">1208793</div>
        </div>
            <div class="num">
                <input type="text" placeholder="DATO" name="data1" disabled>
                <input type="text" placeholder="" name="data2" disabled>
                <input type="text" placeholder="" name="data3" disabled>
            </div>
            <div class="num">
                <input type="text" placeholder="$1200" name="data1" disabled>
                <input type="text" placeholder="" name="data2" disabled>
                <input type="text" placeholder="" name="data3" disabled>
            </div>
        </div>

        <div>
            <button id="boton" type="submit">CONTINUAR</button>
        </div>
    </body>
</html>