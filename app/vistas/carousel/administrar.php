<?php require RUTAAPP . '/vistas/include/header.php'; ?>
<br>
<main role="main" class="container">
    <div class="jumbotron">
        <h1>Carroussel</h1>
        <p class="lead">Sube las imagenes que desees, desde el administrador.</p>
        <a class="btn btn-lg btn-success" href="<?php echo RUTAPUBLIC; ?>/carousel/agregarImagen" role="button"> <i class="material-icons">add</i></a>
    </div>
</main>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php if(count($data)>0):?>
            <table class="table table-bordered">
                <thead>
                    <th>Imagen</th>
                    <th>Texto a mostrar</th>
                    <th>
                </thead>
            <?php foreach ($data['imagenRec'] as $RecImagen): ?>
                <tr>
                    <td><img src="<?php echo RUTAPUBLIC; ?>/public/uploads/<?php echo $RecImagen->imagen; ?>" style="width:240px;"> </td>
                    <td>
                        <?php echo $RecImagen->titulo_imagenes; ?>
                    </td>
                    <td>
                        <a class="btn btn-success" href="./download.php?id=<?php echo $img->id; ?>">Descargar</a>
                        <a class="btn btn-danger" href="<?php echo RUTAPUBLIC; ?>/carousel/eliminarImagen/<?php echo $RecImagen->id_imagenes; ?>/<?php echo $RecImagen->imagen?>">Eliminar</a>
                    </td>
                </tr>
                <?php endforeach;?>
            </table>
            <?php else:?>

            <h4 class="alert alert-warning">No hay imagenes!</h4>
            <?php endif; ?>
            
<?php require RUTAAPP . '/vistas/include/footer.php'; ?>