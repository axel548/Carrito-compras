<?php require RUTAAPP . '/vistas/include/header.php'; ?>
    <div class="container">
    <?php if(isset($_SESSION['pedido']) && $_SESSION['pedido'] == 'complete' ):?>   
    <h1>Tu pedido se ha confirmado</h1>
    <p>Tu pedido ha sido guardado con éxito, una vez que realices la transferencia 
        bancaria a la cuenta 84513515156ADD con el coste del pedido, será procesado y enviado.</p>
        <br>
        <?php if(isset($data['pedido'])):?>  
        <?php foreach ($data['pedido'] as $pedido):?>
            <h3>Dirección de envío:</h3>
            <pre>
        Provincia: <?php echo $pedido->provincia; ?>  
        Ciudad: <?php echo $pedido->localidad; ?>
        Dirección: <?php echo $pedido->direccion; ?>
        </pre>
            <h3>Datos del pedido:</h3>
            <pre>
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
    <?php elseif(isset($_SESSION['pedido']) && $_SESSION['pedido'] != 'complete' ): ?> 
    <h1>Tu pedido no ha podido procesarse.</h1>
    <?php endif; ?> 
    </div>
<?php require RUTAAPP . '/vistas/include/footer.php'; ?>