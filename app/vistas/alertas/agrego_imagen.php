<?php require RUTAAPP . '/vistas/include/header.php'; ?>

<script>
swal("Se agregó la publicación.")
.then((value) => {
  location.href = "<?php echo RUTAPUBLIC; ?>/carousel/index";
});
</script>

<?php require RUTAAPP . '/vistas/include/contenedor.php'; ?>
