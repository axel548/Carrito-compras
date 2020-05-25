<?php require RUTAAPP . '/vistas/include/header.php'; ?>

<br>
<div class="container">
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-header">
                    <h1>Nueva Publicación</h1>
                </div>
                <div class="card-body">
                    <p class="card-text">Crea nuevas publicaciones personalizadas.</p>


                    <form action="<?php echo RUTAPUBLIC; ?>/publicaciones/nuevaPublicacion" method="POST" enctype="multipart/form-data" autocomplete="off">
                        <div class="form-group">
                            <h5 class="card-title">Título</h5>
                            <input type="text" class="form-control" name="titulo" placeholder="Título">
                        </div>
                        <div class="form-group">
                            <h5 class="card-title">Comentario</h5>
                            <textarea name="mensaje" class="form-control" placeholder="En que estás pensando..." cols="30" rows="10"></textarea>
                        </div>

                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="selectFile" aria-describedby="inputGroupFileAddon04" name="imagen">
                                <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit" id="inputGroupFileAddon04" name="action">Publicar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<?php require RUTAAPP . '/vistas/include/footer.php'; ?>