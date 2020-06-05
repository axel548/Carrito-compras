<?php require RUTAAPP . '/vistas/include/menu-productos.php'; ?>
                        <?php foreach ($data['GetProduc'] as $productos): ?>
                        <div class="col-4 mb-5">
                            <div class="card">
                                <img src="<?php echo RUTAPUBLIC; ?>/public/productos/<?php echo $productos->imagen; ?>" class="card-img-top" height="330">
                                <div class="card-body">
                                    <h5 class="card-title"> 
                                        <?php echo $productos->nombre; ?>
                                    </h5>
                                    <p class="card-text">
                                        <?php echo $productos->descripcion; ?>
                                    </p>
                                    <button class="btn btn-primary ">Ver producto</button>
                                </div>
                            </div>
                        </div>
                        <?php endforeach ?>
<?php require RUTAAPP . '/vistas/include/footer-productos.php'; ?>