<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <?php echo NOMBREAPP ?>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    </nav>

<script>
swal("usuario o contraseña incorrecto")
.then((value) => {
  location.href = "<?php echo RUTAPUBLIC; ?>/Administrador/index";
});
</script>

<?php require RUTAAPP . '/vistas/include/contenedor.php'; ?>
