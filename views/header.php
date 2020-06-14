<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" href="<?php echo constant('URL');?>dashboard">Inicio</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo constant('URL');?>dashboard/nomina">Nomina</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Prenomina</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo constant('URL');?>account">Acount</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo constant('URL');?>course">Curso</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo constant('URL');?>logout">Salir</a>
        </li>
    </ul>
</body>
</html>