<?php require RUTAAPP . '/vistas/include/header.php'; ?>

<script>
swal("Se editó el pedido.")
.then((value) => {
  location.href = "<?php echo RUTAPUBLIC; ?>/Pedido/gestioncategorias";
});
</script>

<?php require RUTAAPP . '/vistas/include/contenedor.php'; ?>
