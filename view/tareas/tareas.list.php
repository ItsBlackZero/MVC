<!--autor: Eliud Issac Robalino Aguilar-->
<?php require_once HEADER; ?>

<style>
    .container {
        font-family: 'Arial', sans-serif;
    }

    h2 {
        color: #343a40;
    }

    .btn-secondary {
        background-color: #6c757d;
        border: none;
    }

    .btn-secondary:hover {
        background-color: #5a6268;
    }

    .btn-warning {
        background-color: #ffc107;
        border: none;
    }

    .btn-warning:hover {
        background-color: #e0a800;
    }

    .btn-danger {
        background-color: #dc3545;
        border: none;
    }

    .btn-danger:hover {
        background-color: #c82333;
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: #f8f9fa;
    }

    .table-hover tbody tr:hover {
        background-color: #e9ecef;
    }

    .table-dark th {
        background-color: #343a40;
        color: white;
    }

    .table-dark th:hover {
        background-color: #343a40;
    }
</style>

<div class="container mt-4">
    <h2 class="mb-4"><?php echo $titulo; ?></h2>
    <div class="row mb-3">
        <div class="col-sm-6">
            <form action="index.php?c=tareas&f=search" method="POST" class="input-group">
                <input type="text" name="b" id="busqueda" placeholder="Buscar..." class="form-control"/>
                <button type="submit" class="btn btn-secondary"><i class="fas fa-search"></i> Buscar</button>
            </form>       
        </div>
        <div class="col-sm-6 text-end">
            <a href="index.php?c=tareas&f=view_new" class="btn btn-secondary">
                <i class="fas fa-plus"></i> Nuevo
            </a>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Estado</th>
                    <th>Prioridad</th>
                    <th>Tiempo Estimado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody class="tabladatos">
                <?php foreach ($resultados as $fila) { ?>
                <tr>
                    <td><?php echo $fila['tareas_nombre']; ?></td>
                    <td><?php echo $fila['tareas_descripcion']; ?></td>
                    <td><?php echo $fila['tareas_estado']; ?></td>
                    <td><?php echo $fila['tareas_prioridad']; ?></td>
                    <td><?php echo $fila['tiempo_estimado']; ?></td>
                    <td>
                        <a class="btn btn-warning btn-sm me-2" href="index.php?c=tareas&f=view_edit&id=<?php echo $fila['tareas_id']; ?>">
                            <i class="fas fa-edit"></i> Editar
                        </a>
                        <a class="btn btn-danger btn-sm" onclick="return confirm('¿Está seguro de eliminar la tarea?');" href="index.php?c=tareas&f=delete&id=<?php echo $fila['tareas_id']; ?>">
                            <i class="fas fa-trash-alt"></i> Eliminar
                        </a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>




<?php  require_once FOOTER ?>