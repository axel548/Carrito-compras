<?php require RUTAAPP . '/vistas/include/header.php'; ?>

<script>
swal("La publicación ha sido eliminada.")
.then((value) => {
  location.href = "<?php echo RUTAPUBLIC; ?>/publicaciones/index";
});
</script>

<?php require RUTAAPP . '/vistas/include/contenedor.php'; ?>
