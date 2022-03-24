<?php require RUTAAPP . '/vistas/include/header.php'; ?>

<div class="container m-5">
    <div class="row">
        <div class="col-4">
        <?php if(isset($data['pedido'])):?>
            <?php foreach ($data['pedido'] as $pedido):?>
            <h1>Detalle del Pedido</h1>
            <?php if(isset($_SESSION['id_usuario']) && $_SESSION['usr']->rol=="1"): ?>
            <form action="<?php echo RUTAPUBLIC; ?>/pedido/estado" method="POST" enctype="multipart/form-data" autocomplete="off">
                <input type="hidden" value="<?= $pedido->id?>" name="pedido_id">
                <select name="estado" id="" class="custom-select">
                    <option value="confirm" <?= $pedido->estado == "confirm" ? 'selected' : ''; ?>>Pendiente</option>
                    <option value="preparation" <?= $pedido->estado == "preparation" ? 'selected' : ''; ?>>En preparación</option>
                    <option value="ready" <?= $pedido->estado == "ready" ? 'selected' : ''; ?>>Preparado para enviar</option>
                    <option value="sended" <?= $pedido->estado == "sended" ? 'selected' : ''; ?>>Enviado</option>
                </select>
                <br><br>
                <button class="btn btn-warning btn-lg btn-block">Cambiar Estado</button>
            </form>
            <?php endif; ?>


        </div>
        <div class="col-8">

            <h3>Dirección de envío:</h3>
            <pre>
        Provincia: <?php echo $pedido->provincia; ?>  
        Ciudad: <?php echo $pedido->localidad;?>  
        Dirección: <?php echo $pedido->direccion;?> 
        </pre>
            <h3>Datos del pedido:</h3>
            <pre>
        <?php if(isset($_SESSION['id_usuario']) && $_SESSION['usr']->rol=="1"): ?>
        Estado: <?= Pedido::showStatus($pedido->estado);?> 
         <?php endif; ?>
        Número de pedido: <?php echo $pedido->id; ?>  
        Total a pagar: $<?php echo $pedido->coste;?>
        <br>
        Productos: 
        </pre>
            <?php foreach ($data['pedido_productos'] as $pedido_productos): ?>
            <div class="card mb-2" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <?php if($pedido_productos->imagen != null): ?>
                        <img src="<?php echo RUTAPUBLIC; ?>/public/productos/<?php echo $pedido_productos->imagen; ?>" class="card-img" alt="...">
                        <?php else: ?>
                        <img src="<?php echo RUTAPUBLIC; ?>/public/img/NO-ENCONTRADO.jpg" alt="" width="200">
                        <?php endif; ?>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><a href="<?php echo RUTAPUBLIC; ?>/usuarios/getProduct/<?php echo $pedido_productos->id; ?>"><?php echo $pedido_productos->nombre; ?></a></h5>
                            <p class="card-text">precio: <span class="font-weight-bold">$<?php echo $pedido_productos->precio; ?></span></p>
                            <p class="card-text">cantidad: <small class="text-muted"><?php echo $pedido_productos->unidades; ?></small></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php if(isset($_SESSION['id_usuario']) && $_SESSION['usr']->rol=="1"): ?>
<?php require RUTAAPP . '/vistas/include/contenedor.php'; ?>
<?php else: ?>
<?php require RUTAAPP . '/vistas/include/footer.php'; ?>
<?php endif; ?>