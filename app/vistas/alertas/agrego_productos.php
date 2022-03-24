<?php require RUTAAPP . '/vistas/include/header.php'; ?>

<script>
swal("Se agregó el Producto.")
.then((value) => {
  location.href = "<?php echo RUTAPUBLIC; ?>/Productos/index";
});
</script>

<?php require RUTAAPP . '/vistas/include/contenedor.php'; ?>
