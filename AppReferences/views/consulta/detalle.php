<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require_once 'views/header.php'; ?>
    
    <div id="main">
        <h1 class="center">Detalle de <?php echo $this->alumno->matricula; ?></h1>
        <div class="center"><?php echo $this->mensaje; ?></div>
        
    <form action="<?php echo constant('URL');?>consulta/actualizarAlumno" method="POST">
            <p>
                <label for="matricula">Matricula</label><br>
                <input type="text" name="matricula" id="" disabled value="<?php echo $this->alumno->matricula; ?>" require >
            </p>
            <p>
                <label for="nombre">Nombre</label><br>
                <input type="text" name="nombre" id="" value="<?php echo $this->alumno->nombre; ?>" require>
            </p>
            <p>
                <label for="apellido">apellido</label><br>
                    <input type="text" name="apellido" id="" value="<?php echo $this->alumno->apellido; ?>" require>
            </p>
            
            <p>
                <input type="submit" value="Actualizar alumno">
            </p>
    </form>
    </div>
    

    
    <?php require_once 'views/footer.php'; ?>
</body>
</html>