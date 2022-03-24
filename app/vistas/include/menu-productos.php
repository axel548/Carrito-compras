<?php require RUTAAPP . '/vistas/include/header.php'; ?>

<div class="container-fluid">
    <div class="row">
        <div class="barra-lateral col-12 col-sm-auto">
            <div class="logo">
                <h1 class="bg-primary">Categorías</h1>
            </div>

            <nav class="menu d-flex d-sm-block justify-content-center flex-wrap">
                <?php foreach ($data['GetCateg'] as $categorias): ?>
                <a href="<?php echo RUTAPUBLIC; ?>/usuarios/verCategoria/<?php echo $categorias->id; ?>">
                    <ion-icon name="cart"></ion-icon><span><?php echo $categorias->nombre; ?></span></a>
                <?php endforeach ?>
            </nav>
        </div>
        <main class="main col">
            <div class="row">
                <div class="columna col-lg-12">
                    <div class="card-deck">