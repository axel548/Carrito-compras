<?php require RUTAAPP . '/vistas/include/header.php'; ?>

<br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Subir imagenes o archivos</h1>
            <br>
            <form enctype="multipart/form-data" method="post" action="<?php echo RUTAPUBLIC; ?>/carousel/nuevaImagen" enctype="multipart/form-data" autocomplete="off">
                <div class="form-group">
                    <label for="exampleInputPassword1">Texto a mostrar</label>
                    <input type="text" name="title" class="form-control" placeholder="Texto a mostrar">
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleInputFile"></label>
                    <input type="file" name="arch_image" required>
                </div>
                <br>
                <input type="submit" value="Subir imagen" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>

<?php require RUTAAPP . '/vistas/include/contenedor.php'; ?>