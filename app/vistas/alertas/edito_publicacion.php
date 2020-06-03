<?php require RUTAAPP . '/vistas/include/header.php'; ?>

<script>
swal("Se editó la publicación.")
.then((value) => {
  location.href = "<?php echo RUTAPUBLIC; ?>/publicaciones/index";
});
</script>

<?php require RUTAAPP . '/vistas/include/contenedor.php'; ?>
