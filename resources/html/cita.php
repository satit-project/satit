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
    <link href="../css/cita.css" rel="stylesheet" type="text/css">
    <script src="../js/creaRenglones.js"></script>


	<!-- formato de los botones de la pantalla cuando no se ha iniciado sesion-->
	<link href="../css/sinAcceso.css" rel="stylesheet" type="text/css">
    <title>Cita</title>
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
        <div class="top-barr"></div>
    </section>
        <!-- Logo de usuario y Nombre-->
        <section>
            <img src="../img/nomina/profilepic_unisex.gif" class="user-logo">
            <h2>1208750</h2>
        </section>

        <!-- Seccion para mostrar la nomin-->
        <div id="seccion-cita">
            <div class="departamentos">
                <h3>Selecciona un departamento: </h3>
                <div>
                    <input type="radio" id="rh" 
                           name="departamento"
                           value="rh">
                    <label for="rh">Recursos Humanos</label>
                </div>

                <div>
                    <input type="radio" id="finanzas" 
                           name="departamento"
                           value="finanzas"
                           >
                    <label for="finanzas">Finanzas</label>
                </div>

                <div>
                    <input type="radio" id="cyd" 
                           name="departamento"
                           value="cyd">
                    <label for="cyd">Capacitación y desarrollo</label>
                </div>
            </div>

            <div class="date-picker">
                <div class="selected-date"> 30 / 07 / 2019 </div>

                <div class="dates">
                    <div class="month">
                        <div class="arrows prev-mth">&lt;</div>
                        <div class="mth"></div>
                        <div class="arrows next-mth">&gt;</div>
                    </div>
                    <div class="days"></div>
                </div>
            </div>

        </div>
        <!--Boton continuar-->
            <a href="menu.php"class="btn btn-continuar">Continuar</a>
    </div>    
</body>
<script src="../js/cita.js"></script>
<!-- Barra inferior-->
<footer class="footer">
        <a href="../../index.html"class="btn btn-salir">Salir</a>
</footer>
</html>