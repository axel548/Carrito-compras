<?php require RUTAAPP . '/vistas/include/header.php'; ?>

<br>
<div class="container">
    <h1>Gestionar Productos</h1>
    <br>
    <a href="<?php echo RUTAPUBLIC; ?>/Productos/crearProduc" class="btn btn-success">Crear Producto</a>
    <br><br>
    <table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Precio</th>
      <th scope="col">Stock</th>
      <th scope="col">Categoría</th>
      <th scope="col">Borrar</th>
      <th scope="col">Editar</th>
    </tr>
  </thead>
    <?php foreach ($data['productos'] as $product): ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $product->id_produco; ?></th>
      <td><?php echo $product->nombre_producto; ?></td>
      <td><?php echo $product->precio; ?></td>
      <td><?php echo $product->stock; ?></td>
      <td><?php echo $product->nombre_categoria; ?></td>
      <td><a href="<?php echo RUTAPUBLIC; ?>/Productos/vistaEditarProduc/<?php echo $product->id_produco; ?>" class="btn btn-warning">Editar</a></td>
      <td><a href="<?php echo RUTAPUBLIC; ?>/Productos/eliminarProduc/<?php echo $product->id_produco; ?>/<?php echo $product->imagen?>" class="btn btn-danger">Eliminar</a></td>   
    </tr>
  </tbody>
    <?php endforeach ?>
    </table>
</div>



<?php require RUTAAPP . '/vistas/include/footer.php'; ?>