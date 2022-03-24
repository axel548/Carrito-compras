<?php require RUTAAPP . '/vistas/include/header.php'; ?>
<?php if(isset($_SESSION['id_usuario'])): ?>
<div class="container">
    <h1>Hacer Pedidos</h1>
    <a href="<?php echo RUTAPUBLIC; ?>/Carrito/index">Ver Productos y precio del pedido.</a>
    <div class="row mt-3">
        <div class="col s12">
            <div class="card">
                <div class="card-header">
                    <h1>Dirección para el envio</h1>
                </div>
                <div class="card-body">
                    <form action="<?php echo RUTAPUBLIC; ?>/Pedido/add" method="POST" enctype="multipart/form-data" autocomplete="off">
                        <!-- CONFIRMAR PEDIDO -->
                        <div class="form-group">
                            <h5 class="card-title">Provincia</h5>
                            <input type="text" class="form-control" name="provincia" placeholder="Escribe la provincia" required>
                        </div>
                        <div class="form-group">
                            <h5 class="card-title">Ciudad</h5>
                            <input type="text" class="form-control" name="ciudad" placeholder="Escribe el nombre la ciudad" required>
                        </div>
                        <div class="form-group">
                            <h5 class="card-title">Dirección</h5>
                            <input type="text" class="form-control" name="direccion" placeholder="Escribe tu direcció completa" required>
                        </div>
                        <div class="input-group">
                            <button class="btn btn-primary" type="submit" id="inputGroupFileAddon04" name="action">Confimar Pedido</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php else: ?>
<h1>Necesitas estar identificado</h1>
<p>Necesitas estar logueado en la web para realizar tu pedido.</p>
<?php endif; ?>
<?php require RUTAAPP . '/vistas/include/footer.php'; ?>