<?php require RUTAAPP . '/vistas/include/header.php'; ?>

<script>
swal("El producto ha sido eliminado.")
.then((value) => {
  location.href = "<?php echo RUTAPUBLIC; ?>/Productos/index";
});
</script>

<?php require RUTAAPP . '/vistas/include/footer.php'; ?>
