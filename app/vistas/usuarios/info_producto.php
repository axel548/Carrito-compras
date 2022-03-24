<?php require RUTAAPP . '/vistas/include/header.php'; ?>
<br>
<div class="container">
    <div class="row">
        <!-- Menu de Tiendas -->
        <div class="col-4">
            <div class="card mb-5" style="width: 18rem;">
                <div class="card-header">
                    Tiendas
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <p class="mb-0">Metronorte</p>
                        <span class="text-muted" style="font-size: 12px;">C.C. Metronorte Anexo Z.17</span>
                    </li>
                    <li class="list-group-item">
                        <p class="mb-0">Express</p>
                        <span class="text-muted" style="font-size: 12px;">C.C. Paseo San Sebastian</span>
                    </li>
                    <li class="list-group-item">
                        <p class="mb-0">Villa Hermosa</p>
                        <span class="text-muted" style="font-size: 12px;">C.C. Ecocentros Los Alamos</span>
                    </li>
                    <li class="list-group-item">
                        <p class="mb-0">Madero Roosevelt</p>
                        <span class="text-muted" style="font-size: 12px;">C.C. Plaza Madero Roosevelt</span>
                    </li>
                    <li class="list-group-item">
                        <p class="mb-0">San Cristobal Blu</p>
                        <span class="text-muted" style="font-size: 12px;">C.C. Blu Plaza</span>
                    </li>
                    <li class="list-group-item">
                        <p class="mb-0">Atanasio</p>
                        <span class="text-muted" style="font-size: 12px;">C.C. Los Cedros</span>
                    </li>
                    <li class="list-group-item">
                        <p class="mb-0">MetroSur</p>
                        <span class="text-muted" style="font-size: 12px;">C.C. Metrosur Z.12</span>
                    </li>
                    <li class="list-group-item">
                        <p class="mb-0">Xela Interplaza</p>
                        <span class="text-muted" style="font-size: 12px;">C.C. Interplaza Xela</span>
                    </li>
                    <li class="list-group-item">
                        <p class="mb-0">Mazatenango</p>
                        <span class="text-muted" style="font-size: 12px;">Plaza Las Americas, Mazate</span>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Información del Producto -->
        <div class="col-8 rounded border mb-5">
            

<?php foreach ($data['producto'] as $getproduco): ?>
    <div class="row justify-content-center mb-5 bg-warning">
                <h1 style="font-size: 22px;">Detalle del Producto</h1>
            </div>
            <div class="row">
                <div class="col-4 ml-5 mr-5">
                    <img class="rounded" src="<?php echo RUTAPUBLIC; ?>/public/productos/<?php echo $getproduco->imagen; ?>" alt="" width="200">
                </div>
                <div class="col-6 mr-3 ml-0">
                    <h3><?php echo $getproduco->nombre; ?></h3>
                    <p style="font-size:15px;"><?php echo $getproduco->descripcion; ?></p>
                    <p>Precio:
                        <span class="font-weight-bold">$<?php echo $getproduco->precio; ?></span>
                    </p>
                    <p>Stock:
                        <span class="font-weight-bold"> <?php echo $getproduco->stock; ?></span>
                    </p>
                    <a href="<?php echo RUTAPUBLIC; ?>/Carrito/add/<?php echo $getproduco->id; ?>" class="btn btn-warning btn-lg btn-block">
                        <ion-icon name="cart" class="mr-3"></ion-icon> Añadir a Carrito</a>
                    <a href="#" class="btn btn-warning btn-lg btn-block">
                        <ion-icon name="information-circle" class="mr-3"></ion-icon> Detalles</a>
                    <a href="#" class="btn btn-warning btn-lg btn-block">
                        <ion-icon name="videocam" class="mr-3"></ion-icon> Ver video de Producto</a>

                </div>
            </div>
<?php endforeach ?>
        </div>
    </div>
</div>

<?php require RUTAAPP . '/vistas/include/footer.php'; ?>
