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
    <link href="../css/encuesta.css" rel="stylesheet" type="text/css">

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

        <div>
             <h2>¿Cómo te atendimos hoy?</h2>
        </div>
           
        <!-- Emojis para encuesta de satisfaccion -->
        <section class="seccion-botones satisfaccion">  
                <div class="botones-child">
                    <button id="excelent" class="icon excelent" data-value="5" onclick="myFunction('excelent');" ></button>
                </div>
                <div class="botones-child" >
                <button id="good"class="icon good" data-value="4" onclick="myFunction('good');" ></button>
                </div>
                <div class="botones-child">
                <button id="fine"class="icon fine" data-value="3" onclick="myFunction('fine');"></button>
                </div>
                <div class="botones-child">
                <button id="well" class="icon well" data-value="2" onclick="myFunction('well');"></button>
                </div>
                <div class="botones-child">
                <button id="bad" class="icon bad" data-value="1" onclick="myFunction('bad');"></button>
                </div>   

        </section>

        <script>
            function myFunction(voto)
            {
                var voto = voto
                console.log(voto)
                var valorVoto = document.getElementById(voto).getAttribute("data-value");
                console.log(valorVoto)

               }
        </script>


    </div>    
</body>


<!-- Barra inferior-->
<footer class="footer"></footer>


</html>