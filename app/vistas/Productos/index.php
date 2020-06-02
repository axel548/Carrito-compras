<?php require RUTAAPP . '/vistas/include/header.php'; ?>
<br>
<div class="container">
    <!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Gestionar Productos</h1>
<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>
  <a href="<?php echo RUTAPUBLIC; ?>/Productos/crearProduc" class="btn btn-secondary btn-icon-split">
    <span class="icon text-white-50">
      <i class="fas fa-arrow-right"></i>
    </span>
    <span class="text">Crear Producto</span>
  </a>
                                    <br><br>
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
                        <th>Nombre</th>
                        <th>Stock</th>
                        <th>Precio</th>
                        <th>Categoría</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Stock</th>
                        <th>Precio</th>
                        <th>Categoría</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($data['productos'] as $product): ?>
                    <tr>
                        <td>
                            <?php echo $product->id_produco; ?>
                        </td>
                        <td>
                            <?php echo $product->nombre_producto; ?>
                        </td>
                        <td>
                            <?php echo $product->stock; ?>
                        </td>
                        <td>$
                            <?php echo $product->precio; ?>
                        </td>
                        <td>
                            <?php echo $product->nombre_categoria; ?>
                        </td>
                        <td><a href="<?php echo RUTAPUBLIC; ?>/Productos/vistaEditarProduc/<?php echo $product->id_produco; ?>" class="btn btn-warning">Editar</a></td>
                        <td><a href="<?php echo RUTAPUBLIC; ?>/Productos/eliminarProduc/<?php echo $product->id_produco; ?>/<?php echo $product->imagen?>" class="btn btn-danger">Eliminar</a></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>

<?php require RUTAAPP . '/vistas/include/contenedor.php'; ?>