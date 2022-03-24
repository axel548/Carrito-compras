<?php
require RUTAAPP . '/vistas/include/header.php'; 
?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if(count($data)>0):?>
                <!-- aqui insertaremos el slider -->
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <?php $cnt=0; foreach ($data['imagRe'] as $rcpImagen): ?>
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="<?php if($cnt==0){ echo 'active'; }?>"></li>
                        <?php $cnt++; endforeach; ?>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <?php $cnt=0; foreach ($data['imagRe'] as $rcpImagen): ?>
                        <div class="carousel-item <?php if($cnt==0){ echo 'active'; }?>">
                            <img src="<?php echo RUTAPUBLIC; ?>/public/uploads/<?php echo $rcpImagen->imagen; ?>" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h4>
                                    <?php echo $rcpImagen->titulo; ?>
                                </h4>
                            </div>
                        </div>
                        <?php $cnt++; endforeach; ?>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <?php else:?>
                <h4 class="alert alert-warning">No hay imagenes</h4>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <br><br>

    <div class="container">
        <h1>Gráficas</h1>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <h2>Gráfica de línea</h2>
                <hr>
                <div id="myfirstchart"></div>
            </div>
            <div class="col-md-6">
                <h2>Gráfica de área</h2>
                <hr>
                <div id="graph-client"></div>
            </div>
        </div>
        <br><br>
        <button type="button" id="botData" class="btn btn-primary">Cargar Data</button>
        <br>
    </div>



    <br><br><br>

    <?php require RUTAAPP . '/vistas/include/precios.php'; ?>
    <?php require RUTAAPP . '/vistas/include/footer.php'; ?>