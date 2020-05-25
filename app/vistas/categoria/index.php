<?php require RUTAAPP . '/vistas/include/header.php'; ?>

<br>
<div class="container">
    <h1>Gestionar Categorías</h1>
    <br>
    <a href="<?php echo RUTAPUBLIC; ?>/Categoria/crearCateg" class="btn btn-success">Crear Categoría</a>
    <br><br>
    <?php foreach ($data['categoria'] as $categ): ?>
    <div class="row">
        <div class="co-md-3">
            <div class="card text-center" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">
                        <?php echo $categ->nombre; ?>
                    </h5>
                    <p class="card-text">
                        <?php echo $categ->comentario; ?>
                    </p>
                    <a href="#" class="btn btn-primary">Ir a categoría</a>
                </div>
            </div>
        </div>
        <?php endforeach ?>
    </div>
</div>
<?php require RUTAAPP . '/vistas/include/footer.php'; ?>