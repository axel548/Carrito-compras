<?php require RUTAAPP . '/vistas/include/header.php'; ?>

<script>
swal("La reservación ha sido eliminada.")
.then((value) => {
  location.href = "<?php echo RUTAPUBLIC; ?>/reservas/index";
});
</script>

<?php require RUTAAPP . '/vistas/include/contenedor.php'; ?>
