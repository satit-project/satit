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
        <h1 class="center">Seccion de consulta</h1>
        
        <table width=100% >
            <thead>
            <tr>
                <th>Matricula</th>
                <th>Nombre</th>
                <th>Apellido</th>
            </tr>
            </thead>
            <tbody>
                <?php
                include_once 'models/alumno.php';
                 foreach($this->alumnos as $row){
                     $alumno = new Alumno();
                     $alumno = $row;
                
                 ?>
                 <tr>
                    <td><?php echo $alumno->matricula; ?> </td>
                    <td><?php echo $alumno->nombre; ?></td>
                    <td><?php echo $alumno->apellido; ?></td>
                    <td><a href="<?php echo constant('URL').'consulta/verALumno/'.$alumno->matricula; ?>">Editar</a></td>
                    <td><a href="<?php echo constant('URL').'consulta/eliminarALumno/'.$alumno->matricula; ?>"">Eliminar</a></td>
                </tr>
                <?php  } ?>
            </tbody>
        </table>
        
    </div>
    
    <?php require_once 'views/footer.php'; ?>
</body>
</html>