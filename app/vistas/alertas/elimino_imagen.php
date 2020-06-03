<?php require RUTAAPP . '/vistas/include/header.php'; ?>

<script>
swal("La imagen ha sido eliminada.")
.then((value) => {
  location.href = "<?php echo RUTAPUBLIC; ?>/carousel/index";
});
</script>

<?php require RUTAAPP . '/vistas/include/contenedor.php'; ?>
