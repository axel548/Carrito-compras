<?php require RUTAAPP . '/vistas/include/header.php'; ?>

<div class="container">
    <h1>Crear nueva Categoria</h1>
    <div class="row">
        <div class="col s-10">
            <form action="<?php echo RUTAPUBLIC; ?>/Categoria/guardarCateg" method="POST" enctype="multipart/form-data" autocomplete="off">
                <div class="form-group">
                    <h5 class="card-title">Título</h5>
                    <input type="text" class="form-control" name="titulo" placeholder="Título">
                </div>
                <div class="form-group">
                    <h5 class="card-title">Comentario</h5>
                    <textarea name="mensaje" class="form-control" placeholder="En que estás pensando..." cols="30" rows="10"></textarea>
                </div>
                   <button class="btn btn-success">Crear Categoría</button> 
            </form>
        </div>
    </div>
</div>
<?php require RUTAAPP . '/vistas/include/contenedor.php'; ?>