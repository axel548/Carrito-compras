<?php require RUTAAPP . '/vistas/include/header.php'; ?>

<script>
swal("Bienvenido")
.then((value) => {
  location.href = "<?php echo RUTAPUBLIC; ?>/inicio/index";
});
</script>

<?php require RUTAAPP . '/vistas/include/footer.php'; ?>
