<?php require RUTAAPP . '/vistas/include/header.php'; ?>

<script>
swal("Se agregó el pedido.")
.then((value) => {
  location.href = "<?php echo RUTAPUBLIC; ?>/pedido/confirmado";
});
</script>

<?php require RUTAAPP . '/vistas/include/footer.php'; ?>
