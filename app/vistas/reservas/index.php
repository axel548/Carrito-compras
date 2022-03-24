<?php require RUTAAPP . '/vistas/include/header.php'; ?>
<br>
<main role="main" class="container">
    <div class="jumbotron">
        <h1>Reservaciones</h1>
        <p class="lead">Haz tus reservaciones.</p>
        <a class="btn btn-lg btn-danger" href="<?php echo RUTAPUBLIC; ?>/reservas/agregarReserva" role="button"> <i class="material-icons">add</i></a>
    </div>
</main>

<div class="container">
    <div class="row">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Empresa</th>
                    <th scope="col">Tel.</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Cantidad/Hospedaje</th>
                    <th scope="col">Email</th>
                    <th scope="col">Entrada/Salida</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Tipo de Evento</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <?php foreach ($data['reserva'] as $reserv): ?>
            <tbody>
                <tr>
                    <th scope="col">
                        <?php echo $reserv->id_reserva; ?>
                    </th>
                    <th scope="col">
                        <?php echo $reserv->name_empresa; ?>
                    </th>
                    <th scope="col">
                        <?php echo $reserv->tel; ?>
                    </th>
                    <th scope="col">
                        <?php echo $reserv->apellido .", " . $reserv->nombre_cliente.".";?>
                    </th>
                    <th scope="col">
                        <?php echo $reserv->cantidad_personas." / ".$reserv->hospedaje; ?>
                    </th>
                    <th scope="col">
                        <?php echo $reserv->email; ?>
                    </th>
                    <th scope="col">
                        <?php echo $reserv->hrs_entrada." / ".$reserv->hrs_salida; ?>
                    </th>
                    <th scope="col">
                        <?php echo $reserv->dia." ".$reserv->mes." ".$reserv->anio; ?>
                    </th>
                    <th scope="col">
                        <?php echo $reserv->tipo_evento; ?>
                    </th>
                    <?php if($reserv->id_usuario == $_SESSION['id_usuario']): ?>
                    <th scope="col"><a href="<?php echo RUTAPUBLIC; ?>/reservas/eliminarReserva/<?php echo $reserv->id_reserva; ?>" class="btn btn-primary">Eliminar</a></th>
                    <?php endif ?>
                </tr>
            </tbody>
            <?php endforeach ?>
        </table>
    </div>
</div>

<?php require RUTAAPP . '/vistas/include/contenedor.php'; ?>