<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="titulo" content="Inicio de sesion SATIT">
        <meta name="descripcion" content="Sistema Agil de Tramites Internos para los Trabajadores">
        <link rel="stylesheet" type="text/css" href="resources/css/keyboard.css">
        <link rel="stylesheet" type="text/css" href="resources/css/principal.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <link href="resources/css/index.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    </head>
        <script src="resources/js/index.js"></script>
        <script src="resources/js/keyboard.js"></script>
        <title> H&R | Inicio de Sesion</title>
    </head>
    <body>
        <header>
        </header>
            <!-- LOGIN -->
            <div class="container-fluid contenido">
                <div class="login card-login">
                    <div class="logo-container">
                        <img class="img-logo">
                    </div>
                    <form action="<?php echo constant('URL');?>userSession/validate" method="post">
                    <?php

                    if(isset($errorLogin)){
                        echo $errorLogin;
                    }

                    ?>
                    <div >
                        <input type="text"
                                class="input-text form-control col-10 use-keyboard-input"
                                name="employeeID"
                                placeholder="Numero de empleado"
                                maxlength="16"
                                required>
                    </div>
                    <div >
                        <!--<input type="password" class="input-text" name="password" placeholder="password" required>-->
                        <input type="password"
                                class="input-text form-control col-10 input-lg use-keyboard-input"
                                name="password"
                                placeholder="Contraseña"
                                required>
                    </div>
                    <div>
                        <!-- <a href="resources/html/menu.html" class="btn btn-ingresar">INGRESAR</a> -->
                        <button type="submit"
                                class="btn btn-ingresar col-10 btn-info btn-block">INGRESAR</button>
                    </div>
                    </form>
                    <div class="btn col-10 btn-outline-info">
                        <div class="menu">
                            <a>Olvidaste tu contrasena?</a>
                            <div>
                                <form action="resources/php/password-recovery.php" method="post">
                                    <input type="text" class="input-text form-control" name="numero_empleado" placeholder="Numero de empleado" maxlength="16" required>
                                    <button class="recuperar">Recuperar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </body>
</html>
