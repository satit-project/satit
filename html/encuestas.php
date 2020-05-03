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
             var myWorker = new Worker("worker.js");
             var i;
             i=0;
             var w = null;

            function startTimer()
            {
                if(typeof(Worker)!== "undefined")
                {
                    if(w == null)
                    {
                        w = new Worker("workerTime.js");
                    }
                    w.onmessage = function(event)
                    {
                        console.log(event.data);
                        if(event.data === 5)  // Despues de 5 mins manda la info de Web Storage a la BD
                        {
                            console.log("ya llego wey");
                            w.terminate();
                            timerStart = true;
                            w = null;
                            startTimer();
                        }
                    };
                }
                else
                {
                    console.log("El navegador no soporta web workers");
                }
            }

            function myFunction(votoDOM)
            {

                var voto = votoDOM;
                // obtiene el valor del voto
                var valorVoto = document.getElementById(voto).getAttribute("data-value");
                // guardar el valor del voto en local storage
                saveVote(valorVoto);

                myWorker.onmessage = function(oEvent)
                {
                    console.log("worker said:" + oEvent.data)
                }
                // guarda el voto en el local storage
                myWorker.postMessage(valorVoto)

               }

               function saveVote(voto)
                {
                    var jsonInfo = '{"encuesta": []}';
                    var obj = JSON.parse(jsonInfo);
                    obj['encuesta'].push({"data": voto});
                    jsonInfo = JSON.stringify(obj);
                    console.log(jsonInfo);
                    localStorage.setItem('encuestas', jsonInfo);
                    i++;
              }

        </script>


    </div>    
</body>


<!-- Barra inferior-->
<footer class="footer"></footer>


</html>