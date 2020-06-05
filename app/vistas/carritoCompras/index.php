<?php require RUTAAPP . '/vistas/include/header.php'; ?>
<div class="container m-5">
    <div class="row">
        <!-- CARDS - PRODUCTOS -->
        <div class="col-8">
            <?php if(isset($_SESSION['carrito']) && count($_SESSION['carrito']) >= 1):?>
            <?php 
                    $carrito = $_SESSION['carrito'];
                foreach ($carrito as $indice => $elemento):
                    ?>
            <?php foreach ($elemento['productos'] as $productos):?>
            <div class="card mb-2" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <?php if($productos->imagen != null): ?>
                        <img src="<?php echo RUTAPUBLIC; ?>/public/productos/<?php echo $productos->imagen; ?>" class="card-img" alt="...">
                        <?php else: ?>
                        <img src="<?php echo RUTAPUBLIC; ?>/public/img/NO-ENCONTRADO.jpg" alt="" width="200">
                        <?php endif; ?>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><a href="<?php echo RUTAPUBLIC; ?>/usuarios/getProduct/<?php echo $productos->id; ?>"><?php echo $productos->nombre; ?></a></h5>
                            <p class="card-text">precio: <span class="font-weight-bold">$<?php echo $productos->precio; ?></span></p>
                            <p class="card-text">cantidad: <small class="font-weight-bold">
                                <a href="<?php echo RUTAPUBLIC; ?>/Carrito/minus/<?php echo $indice; ?>" class="btn btn-warning btn-sm ml-2 mr-2"><ion-icon name="remove-outline"></ion-icon></a>
                                    <?php echo $elemento['unidades']; ?></small>
                                <a href="<?php echo RUTAPUBLIC; ?>/Carrito/plus/<?php echo $indice; ?>" class="btn btn-warning btn-sm ml-2 mr-2">
                                    <ion-icon name="add-outline"></ion-icon>
                                </a>
                            </p>
                            <a href="<?php echo RUTAPUBLIC; ?>/Carrito/remove/<?php echo $indice; ?>" class="btn btn-danger mt-2">Eliminar</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <?php endforeach; ?>
            <?php else: ?>
            <h4 class="alert alert-warning">No hay productos en el carrito.</h4>
            <?php endif; ?>
        </div>
        <!-- FORMA DE PAGO -->
        <div class="col-4">
            <div class="col-4">
                <div class="card mb-5" style="width: 18rem;">
                    <div class="card-header">
                        Tiendas
                    </div>
                    <ul class="list-group list-group-flush">
                        <?php $stats = Carrito::statsCarrito(); ?>
                        <li class="list-group-item">
                            <p class="mb-0">Productos:</p>
                            <span class="text-muted" style="font-size: 12px;">
                        <?= $stats['count']; ?>
                        </span>
                        </li>
                        <li class="list-group-item">
                            <p class="mb-0">Precio Total:</p>
                            <span class="text-muted" style="font-size: 12px;">
                        $<?= $stats['total']; ?>
                        </span>
                        </li>
                        <li class="list-group-item">
                            <a href="<?php echo RUTAPUBLIC; ?>/Pedido/index" class="btn btn-warning btn-lg btn-block">Hacer Pedido</a>
                        </li>
                        <li class="list-group-item">
                            <a href="<?php echo RUTAPUBLIC; ?>/Carrito/delete_all" class="btn btn-warning btn-lg btn-block">Vaciar Carrito</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require RUTAAPP . '/vistas/include/footer.php'; ?>