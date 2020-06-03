<?php require RUTAAPP . '/vistas/include/header.php'; ?>

<script>
swal("Se agregó la reservación.")
.then((value) => {
  location.href = "<?php echo RUTAPUBLIC; ?>/reservas/index";
});
</script>

<?php require RUTAAPP . '/vistas/include/contenedor.php'; ?>
