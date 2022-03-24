<?php require RUTAAPP . '/vistas/include/header.php'; ?>
        <div class="container" align="center" style="margin-top: 50px;">
            <div class="row center-div">
                <div class="col-md-8">
                    <form  action="<?php echo RUTAPUBLIC; ?>/usuarios/registrarse" method="post" autocomplete="off">
                        <h1 class="h3 mb-3 font-weight-normal" style="color: black;">Registrarse</h1>

                        <input type="text" class="form-control" placeholder="Nombre" name="nombre" required autofocus>
                        <br>
                        <input type="email" class="form-control" placeholder="Email address" name="correo" required >
                        <br>
                        <input type="password" class="form-control" placeholder="Password" name="pass" required>
                        <br>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">REGISTRARSE</button>
                        <p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>
                    </form>
                </div>
            </div>
        </div>
<?php require RUTAAPP . '/vistas/include/footer.php'; ?> 