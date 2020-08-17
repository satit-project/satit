<div class="container">
    <h2>Lista de Citas</h2>
    <form class="form-inline" action="?controller=citas&action=search" method="post">
        <div class="form-group row">
            <div class="col-xs-4">
                <input class="form-control" id="id" name="id" type="text" placeholder="Busqueda por ID">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"> </span> Buscar </button>
            </div>
        </div>
    </form>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#ID</th>
                    <th>Fecha</th>
                    <th>Estatus</th>
                    <th>ID del Departamento</th>
                    <th>ID del Empleado</th>
                    <th>Comentarios</th>
                </tr>
                <tbody>
                    <?php foreach($listaCitas as $citas){?>
                    <tr>
                        <td><?php echo $citas->getId(); ?></a></td>
                        <td><?php echo $citas->getFecha(); ?></td>
                        <td><?php echo $citas->getEstatus(); ?></td>
                        <td><?php echo $citas->getDepartamentoId(); ?></td>
                        <td><?php echo $citas->getEmpleadoId(); ?></td>
                        <td><?php echo $citas->getComentarios(); ?></td>
                        <td><a href="?controller=citas&&action=delete&&id=<?php echo $citas->getId(); ?>">Eliminar</a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </thead>
        </table>
    </div>
</div>