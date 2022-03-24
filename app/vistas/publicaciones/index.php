<?php require RUTAAPP . '/vistas/include/header.php'; ?>

<br>
<main role="main" class="container">
    <div class="jumbotron">
        <h1>Publicaciones</h1>
        <p class="lead">Crea tus propias publicaciones, desde el administrador.</p>
        <a class="btn btn-lg btn-primary" href="<?php echo RUTAPUBLIC; ?>/publicaciones/vistaNuevaPublicacion" role="button"> <i class="material-icons">add</i></a>
    </div>
</main>


<div class="container">
    <div class="row">
    <?php foreach ($data['post'] as $post): ?>
        <div class="col-md-6">
        <div class="card bg-light mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="<?php echo RUTAPUBLIC; ?>/public/imagenes/<?php echo $post->imagen_publicacion; ?>" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo $post->titulo; ?>    
                        </h5>
                        <p>Creado por:
                            <?php echo $post->nombre; ?>
                        </p>
                        <p class="card-text">
                            <p>
                                <?php echo $post->mensaje; ?>
                            </p>
                        </p>
                        <?php if($post->id_usuario == $_SESSION['id_usuario']): ?>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        <a href="<?php echo RUTAPUBLIC; ?>/publicaciones/vistaEditarPublicacion/<?php echo $post->id_publicacion; ?>" class="btn btn-primary">Editar</a>
                        <a href="<?php echo RUTAPUBLIC; ?>/publicaciones/eliminarPublicacion/<?php echo $post->id_publicacion; ?>/<?php echo $post->imagen?>" class="btn btn-primary">Eliminar</a>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
        </div>
    <?php endforeach ?>
    </div>
</div>

<?php require RUTAAPP . '/vistas/include/contenedor.php'; ?>