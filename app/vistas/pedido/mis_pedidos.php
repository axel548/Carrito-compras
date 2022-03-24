<?php require RUTAAPP . '/vistas/include/header.php'; ?>

<div class="container m-5">
<h1>Mis Pedidos</h1>
<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No. Pedido</th>
      <th scope="col">Coste</th>
      <th scope="col">Fecha</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data['mispedidos'] as $mipedido): ?>
    <tr>
      <th scope="row"><a href="<?php echo RUTAPUBLIC; ?>/Pedido/detalle/<?php echo $mipedido->id; ?>"><?php echo $mipedido->id; ?></a></th>
      <td>$<?php echo $mipedido->coste; ?></td>
      <td><?php echo $mipedido->fecha; ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

</div>

<?php require RUTAAPP . '/vistas/include/footer.php'; ?>