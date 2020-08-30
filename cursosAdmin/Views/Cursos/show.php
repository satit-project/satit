<div>
    <?php require_once('Views/Layouts/sidenav.php'); ?>
</div>
<div style="text-align: center;" class="container" id="main">
    <h1 style="font-size: 30px;">Lista de Cursos</h1>
    <form class="form-inline" action="?controller=cursos&action=search" method="post">
        <div class="form-group row">
            <div class="col-xs-4">
                <input class="form-control" style="font-size: 12px;" id="id" name="id" type="text" placeholder="Busqueda por ID">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-4">
                <button type="submit" style="font-size: 12px;" class="btn btn-primary"><span class="glyphicon glyphicon-search"> </span> Buscar </button>
            </div>
        </div>
    </form>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>#ID</th>
                    <th>Nombre de Curso</th>
                    <th>Descripcion del Curso</th>
                    <th>Horario</th>
                    <th>Fecha</th>
                </tr>
                <tbody>
                    <?php foreach($listaCursos as $cursos){?>
                    <tr>
                        <td><a href="?controller=cursos&&action=updateshow&&idCursos=<?php echo $cursos->getId()?>"> <?php echo $cursos->getId(); ?></a></td>
                        <td><?php echo $cursos->getNombre(); ?></td>
                        <td><?php echo $cursos->getDescripcion(); ?></td>
                        <td><?php echo $cursos->getHorario(); ?></td>
                        <td><?php echo $cursos->getFecha(); ?></td>
                        <td><a href="?controller=cursos&&action=delete&&id=<?php echo $cursos->getId(); ?>">Eliminar</a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </thead>
        </table>
    </div>
</div>