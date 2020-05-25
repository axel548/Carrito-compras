<?php require RUTAAPP . '/vistas/include/header.php'; ?>

<script>
swal("Se agregó la Categoría.")
.then((value) => {
  location.href = "<?php echo RUTAPUBLIC; ?>/categoria/index";
});
</script>

<?php require RUTAAPP . '/vistas/include/footer.php'; ?>
