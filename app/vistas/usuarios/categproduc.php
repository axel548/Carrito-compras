<?php require RUTAAPP . '/vistas/include/menu-productos.php'; ?>
<?php foreach ($data['ver'] as $ver): ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text align center">
                <?php echo $ver->nombre; ?>
            </h1>
            <?php if(count($data['getall'])>0):?>
            <div class="row">
                <?php foreach ($data['getall'] as $getall): ?>
                <div class="col-4 mb-5">
                    <div class="card">
                        <img src="<?php echo RUTAPUBLIC; ?>/public/productos/<?php echo $getall->imagen; ?>" class="card-img-top" height="330">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo $getall->nombre; ?>
                            </h5>
                            <p class="card-text">
                                <?php echo $getall->descripcion; ?>
                            </p>
                        </div>
                        <button class="btn btn-primary btn-lg btn-block">Comprar</button>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
            <?php else:?>
            <h4 class="alert alert-warning">No hay imagenes</h4>
            <?php endif;?>
        </div>
    </div>
</div>
<?php endforeach ?>

<?php require RUTAAPP . '/vistas/include/footer-productos.php'; ?>