<?php require RUTAAPP . '/vistas/include/header.php'; ?>

<br>
<div class="container">
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-header">
                    <h1>Nuevo Producto</h1>
                </div>
                <div class="card-body">
                    <form action="<?php echo RUTAPUBLIC; ?>/Productos/guardarProduc" method="POST" enctype="multipart/form-data" autocomplete="off">
                        <!-- TITULO -->
                        <div class="form-group">
                            <h5 class="card-title">Nombre del Producto</h5>
                            <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                        </div>
                        <!-- DESCRIPCION -->
                        <div class="form-group">
                            <h5 class="card-title">Descripción</h5>
                            <textarea name="mensaje" class="form-control" placeholder="Escriba una descripción del producto" cols="30" rows="3"></textarea>
                        </div>
                        <!-- PRECIO Y STOCK -->
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="precio" placeholder="Precio">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="number" class="form-control" name="stock" maxlength="100" minlength="1" placeholder="Stock">
                                </div>
                            </div>
                        </div>
                        <!-- CATEGORIA E IMAGEN -->
                        <div class="row">
                            <div class="col-6">
                                <div class="input-group mb-3">
                                    <select class="custom-select" id="" name="categoria">
                                        <?php foreach ($data['categorias'] as $categ): ?>
                                        <option value="<?php echo $categ->id; ?>">
                                            <a href="#"><?php echo $categ->nombre; ?></a>
                                        </option>
                                        <?php endforeach ?>
                                    </select>
                                    <div class="input-group-append">
                                        <label class="input-group-text" for="inputGroupSelect02">Options</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="selectFile" aria-describedby="inputGroupFileAddon04" name="imagen">
                                        <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit" id="inputGroupFileAddon04" name="action">Publicar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<?php require RUTAAPP . '/vistas/include/contenedor.php'; ?>