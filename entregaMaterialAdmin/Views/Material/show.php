<div class="container">
    <h2>Lista de Material por Entregar</h2>
    <form class="form-inline" action="?controller=material&action=search" method="post">
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
                    <th>ID del Empleado</th>
                    <th>ID del Material</th>
                    <th>Fecha</th>
                    <th>Status</th>
                </tr>
                <tbody>
                    <?php foreach($listaMaterial as $material){?>
                    <tr>
                        <td><?php echo $material->getId(); ?></a></td>
                        <td><?php echo $material->getEmpleadoId(); ?></td>
                        <td><?php echo $material->getMaterialId(); ?></td>
                        <td><?php echo $material->getFecha(); ?></td>
                        <td><?php echo $material->getStatus(); ?></td>
                        <td><a href="?controller=material&&action=delete&&id=<?php echo $material->getId(); ?>">Eliminar</a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </thead>
        </table>
    </div>
</div>