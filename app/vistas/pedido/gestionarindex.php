<?php require RUTAAPP . '/vistas/include/header.php'; ?>

<div class="container">
    <!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Gestionar Pedidos</h1>
<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>                                    <br><br>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>ID usuario</th>
                        <th>Provincia</th>
                        <th>Localidad</th>
                        <th>Dirección</th>
                        <th>Coste</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>ID usuario</th>
                        <th>Provincia</th>
                        <th>Localidad</th>
                        <th>Dirección</th>
                        <th>Coste</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Estado</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($data['pedidos'] as $pedido): ?>
                    <tr>
                        <td>
                        <a href="<?php echo RUTAPUBLIC; ?>/Pedido/detalle/<?php echo $pedido->id; ?>"><?php echo $pedido->id; ?></a>
                        </td>
                        <td>
                            <?php echo $pedido->usuario_id; ?>
                        </td>
                        <td>
                            <?php echo $pedido->provincia; ?>
                        </td>
                        <td>
                            <?php echo $pedido->localidad; ?>
                        </td>
                        <td>
                            <?php echo $pedido->direccion; ?>
                        </td>
                        <td>$
                            <?php echo $pedido->coste; ?>
                        </td>
                        <td>
                            <?php echo $pedido->fecha; ?>
                        </td>
                        <td>
                            <?php echo $pedido->hora; ?>
                        </td>
                        <td>
                        <?= Pedido::showStatus($pedido->estado);?> 
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>

<?php require RUTAAPP . '/vistas/include/contenedor.php'; ?>