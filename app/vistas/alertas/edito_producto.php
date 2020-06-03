<?php require RUTAAPP . '/vistas/include/header.php'; ?>

<script>
swal("Se editó el producto.")
.then((value) => {
  location.href = "<?php echo RUTAPUBLIC; ?>/Productos/index";
});
</script>

<?php require RUTAAPP . '/vistas/include/contenedor.php'; ?>
