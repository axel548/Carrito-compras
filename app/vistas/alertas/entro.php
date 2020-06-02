<?php require RUTAAPP . '/vistas/include/header.php'; ?>

<script>
swal("Bienvenido")
.then((value) => {
  location.href = "<?php echo RUTAPUBLIC; ?>/Dashboard/index";
});
</script>

<?php require RUTAAPP . '/vistas/include/footer.php'; ?>
